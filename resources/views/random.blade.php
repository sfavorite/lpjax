<div class="container-fluid" style="height:100%" id='content'>

    <div class='row pjax-text'>

        <div class="col-md-6">
            <div id='picture'>
                <a href='/' data-pjax='#picture'>New Picture</a>
                <br>
                    <img src='img/{{ $picture }}' alt='random picture' height=200, width=200>
            </div>
        </div>

        <div class="col-md-6">
            <div id='number'>
                <a href='/' data-pjax='#number'>New #</a>

                <br>{{ $random }}
            </div>
        </div>
    </div>
</div>
