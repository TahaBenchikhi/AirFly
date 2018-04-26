//create pdf
function createPDF(taha,nom){

        html2canvas(taha,{
   onrendered : function(canvas)
   {

		var img = canvas.toDataURL("image/png"),
		doc = new jsPDF();     
        doc.addImage(img, 'JPEG', 20, 20);
        doc.save(nom+'.pdf');
        
   }
        });
	
}

