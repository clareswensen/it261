<footer>
    <ul>
        <li>Copyright &copy; 
        <?php 
            $date_current = date('Y');
            $date_created = 2017;
            if($date_current == $date_created) {
                echo $date_current;
            }else
                echo ''.$date_created.' - '.$date_current.' ';
        ?>
          

        </li>
        <li>All Rights Reserved</li>
        <li><a href="">Terms of Use</a></li>
        <li><a href="">Web Design by Clare</a></li>
        <li> <a id="html-checker" href="#">Check HTML</a></li>
        <li><a id="css-checker" href="#">Check CSS</a></li>
    </ul>
    <script>
        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
    </script>
</footer>

</body>
</html>