<?php include '_header.php' ?>

<main>
    <section>
        <div class="container">
            <h2>Portfolio</h2>
            <div id="portfolio"></div>
        </div>
    </section>
</main>

<?php include '_footer.php' ?>

<script>
    $.ajax({
        type: 'GET',
        url: 'portfolio.json',
        dataType: 'json',
        success: function (data) {
            $.each(data, function (index) {
                $('#portfolio').append(
                    '<div class="bs_row bs_margin80"><div class="bs_one right-margin bs_margin30"><div>' +
                    '<img src="' + data[index].url + '">' +
                    '</div></div><div class="bs_one bs_verticallyCentered"><div>' +
                    '<h3 class="bs_centeredOnMobile">' + data[index].name + '</h3>' +
                    '<p>' + data[index].description + '</p>' +
                    '</div></div></div>'
                );
            });
        }
    })
</script>