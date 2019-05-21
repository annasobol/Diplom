<?php

namespace app\controllers;


use app\models\Product;
//use function Couchbase\basicEncoderV1;

class ProductController extends AppController
{
    public function viewAction(){
        $alias = $this->route['alias'];
        $product = \R::findOne('product', "alias = ? AND status = '1'", [$alias]);
        if (!$product){
            throw new \Exception('траница не найдена упс..', 404);
        }

        //breadcrumbs
        //связаные товары
        $related = \R::getAll("SELECT * FROM related_product JOIN product ON product.id = related_product.related_id WHERE related_product.product_id = ?", [$product->id]);

        // в куки
        $p_model = new Product();
        $p_model->setRecentlyViewed($product->id);

        //просмотренные товары
        $r_viewed = $p_model->getRecentlyViewed();
        $recentlyViewed = null;
        if ($r_viewed){
            $recentlyViewed = \R::find('product', 'id IN (' . \R::genSlots($r_viewed) . ') LIMIT 3', $r_viewed);
        }

        //галерею
        $gallery = \R::findAll('gallery', 'product_id = ?', [$product->id]);
        //модификации товаров

        $this->setMeta($product->title, $product->description, $product->keywords);
        $this->set(compact('product', 'related', 'gallery', 'recentlyViewed'));

    }

}