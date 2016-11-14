 function validateForm() {

      var x = document.forms['myForm']['Fornamn'].value;
      if(x == null || x == "") {
        alert("Fyll i namn");
        return false;
      }

      var y = document.forms['myForm']['Efternamn'].value;
      if(y == null || y == "") {
        alert("Fyll i Efternamn");
        return false;
      }


      var k = document.forms["myForm"]["Email"].value;
      var atpos = k.indexOf("@");
      var dotpos = k.lastIndexOf(".");
      if (atpos<1 || dotpos<atpos+2 || dotpos+2>=k.length) {
          alert("E-post adressen stämmer inte");
          return false;
      }

      var j = document.forms["myForm"]["Fodelsedatum"].value;
      if(j == null || j == "") {
        alert("Var vänlig välj Födelsedatum");
        return false;
      }

      var g = document.forms["myForm"]["Klubbnamn"].value;
      if(g == null || g == "") {
        alert("Var vänlig välj Klubbnamn");
        return false;
      }

       var h = document.forms["myForm"]["Gatunamn"].value;
      if(h == null || h == "") {
        alert("Var vänlig välj Gatunamn");
        return false;
      }

      var u = document.forms["myForm"]["Postort"].value;
      if(u == null || u == "") {
        alert("Var vänlig välj Postort");
        return false;
      }

       var pn = document.forms["myForm"]["Postnummer"].value;
      if(pn == null || pn == "") {
        alert("Var vänlig välj Postnummer");
        return false;
      }

      var a = document.forms["myForm"]["Losenord"].value;
      if(a == null || a == "") {
        alert("Var vänlig välj lösenord");
        return false;
      }

      var b = document.forms["myForm"]["beklosenord"].value;
      if(b == null || b == "") {
        alert("Var vänlig bekräfta lösenord");
        return false;
      }

      if(a != b) {
        alert("Lösenord måste matcha varandra");
        return false;
      }
    }