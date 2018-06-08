function myFunction(element){
    var name=element.getAttribute("src");

    var val = document.getElementById("myMovie");
    val.setAttribute("value", name);
    
    document.getElementById("myForm").submit();

}