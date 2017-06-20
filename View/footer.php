

<div class="footer">
    <h2>Página generada el día:</h2>
    <script>
        var mydate=new Date();
        var year=mydate.getYear();
        if (year < 1000)
            year+=1900;
        var day=mydate.getDay();
        var month=mydate.getMonth()+1;
        if (month<10)
            month="0"+month;
        var daym=mydate.getDate();
        if (daym<10)
            daym="0"+daym;
        document.write("<big><font color='000000' face='Arial'><b>"+daym+"/"+month+"/"+year+"</b></font></big>")

    </script>
</div>


