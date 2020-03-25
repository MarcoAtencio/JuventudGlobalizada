(function() {
    function formatTime(n) {
      return (n < 10) ? "0" + n : n;
    };
  
    function checkTime() {
      var today = new Date(),
    
          day = ["Dom","Lun", "Mar", "Mie", "Jue", "Vie", "Sáb"],
          month = ["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"],
      
          h = formatTime(today.getHours()),
          min = formatTime(today.getMinutes()),
          seg = formatTime(today.getSeconds()),
          hour = h,
          w = "a.m.";
     
      if (hour >= 12) {
        hour = formatTime(hour - 12);
        w = "p.m.";
      };
    
      if (hour == 0) {
        hour = 12;
      };
     
      document.getElementById("fecha").innerHTML = "<span>" + day[today.getDay()] + ", " + today.getDate() + " " + month[today.getMonth()] + " " +  today.getFullYear() + "</span>"; 
      document.getElementById("hora").innerHTML = "<span class='hm-time'>" + hour + ":" + min + "</span><span class='s-time'>"+ ":"+ seg + "</span> <span class='f-time'>" + w + "</span>";
    
      var d = setTimeout(function() {
        checkTime()
      }, 500);
    };
   
    checkTime();
  })();