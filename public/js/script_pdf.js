var docInfo = {
 
 info: {
  title:'Тестовый документ PDF',
  author:'Anna',
  subject:'Theme',
  keywords:'Ключевые слова'
 },
 
 pageSize:'A4',
 pageOrientation:'landscape',//'portrait'
 pageMargins:[50,50,30,60],
 
 header:function(currentPage,pageCount) {
  return {
 text: currentPage.toString() + 'из' + pageCount,
 alignment:'right',
 margin:[0,30,10,50]
  }
 },
 
 footer:[
  {
 text:'нижний колонтитул',
 alignment:'center',//left  right
  }
 ],
 
 content: [
 
  {
  // text:document.getElementById('brand__name').innerHTML,
  //text:'Make a gift',
  text:this.myText,
 fontSize:25,
 margin:[150,80, 30,0]
 //pageBreak:'after'
  },
 
  {
 text:'Текст определенного параграфа № 2',
 style:'header'
 //pageBreak:'before'
  }
 ]
}
