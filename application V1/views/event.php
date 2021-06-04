<div class="fik-content">

    <br>
    <br>
    <br>
    <br>

    <div class="container">

        <ul class="prodi-cat">
            <li><a href="#" class="btn btn-block dkv-color"><b>Event Informatika</b> <span>Desain
                        Komunikasi Visual</span></a></li>
            <li><a href="#" class="btn btn-block dp-color"><b>Event Fakultas Industri Kreatif</b> <span>Event Fakultas
                        Industri Kreatif</span></a></li>
            <li><a href="#" class="btn btn-block di-color"><b>Event FRI</b> <span>Event FRI</span></a></li>
            <li><a href="#" class="btn btn-block ktm-color"><b>Event Fakultas Elektro</b> <span>Event Fakultas
                        Elektro</span></a>
            </li>
            <li><a href="#" class="btn btn-block sr-color"><b>Event Fakultas Ekonomi dan Bisnis</b> <span>Event Fakultas
                        Ekonomi dan Bisnis</span></a>
            </li>
        </ul>

        <div class="fik-feed galeri-karya">
            <div class="feed-container" id="load_data">
            </div>
        </div>

        <div id="load_data_message"></div>
    </div>
</div>

<script>
    $(document).ready(function() {

        var limit = 4;
        var start = 0;
        var action = 'inactive';

        function lazzy_loader(limit) {
            var output = '';
            for (var count = 3; count < limit; count++) {
                output += '<div class="text-center" style="margin-top:14px">';
                output += '<div class="btn btn-primary btn-pill btn-icon btn-icon-left fik-show-more-btn"><span class="fas fa-spinner fa-spin"></span> <b>Loading ....</b></div>';
                output += '</div>';
            }
            $('#load_data_message').html(output);
        }

        lazzy_loader(limit);

        function load_data(limit, start) {
            $.ajax({
                url: "<?= base_url('Event/fetch'); ?>",
                method: "POST",
                data: {
                    limit: limit,
                    start: start
                },
                cache: false,
                success: function(data) {
                    if (data == '') {
                        $("#load_data_message").fadeOut(1000);
                        action = 'active';
                    } else {
                        $('#load_data').append(data);
                        $('#load_data_message').html("");
                        action = 'inactive';
                    }
                }
            })
        }

        if (action == 'inactive') {
            action = 'active';
            load_data(limit, start);
        }

        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive') {
                lazzy_loader(limit);
                action = 'active';
                start = start + limit;
                setTimeout(function() {
                    load_data(limit, start);
                }, 1000);
            }
        });

    });
</script>