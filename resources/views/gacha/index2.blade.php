@extends('layouts.main')
  
<style>
.front.animate .content {
    transform: rotateY(180deg);
}

.content {
    transition: 0.8s;
    transform-style: preserve-3d;
    position: relative;
}
.front,
.back {
    backface-visibility: hidden;
    position: absolute;
    top: 0;
    left: 0;
}
.front {
    z-index: 2;
    transform: translateX(-100%) rotateY(0deg);
}
.back {
	display: flex;
	justify-content: center;
	align-items: center;
    transform: translateX(-100%) rotateY(180deg);
}
.img {
    background-size: cover;
	background-position: center center;
}


</style>


<div class="content-area">
    <div class="container">
        @foreach ($randomCards as $card)    
        <div class="box w-40 h-auto grid grid-cols-5 gap-4 my-7">
            <div class="content">
                <div class="front img w-40 h-auto"> 
                    <img src="/Yugioh_Card_Back.jpg" alt="">
                </div>
                <div class="back w-40 h-auto">
                    <div class="back-content">
                        <img src="{{ $card->image }}" alt="">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $('.front .content').click(function() {
	$(this).closest('.front').toggleClass('animate');
    $(this).css('transform, rotateY(180deg)');
});
</script>
</body>
</html>
