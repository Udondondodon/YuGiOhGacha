@extends('layouts.main')
@extends('partials.navbar')

<style>
.card {
  position: relative;
  cursor: pointer;
  transform-style: preserve-3d;
  transform-origin: center right;
  transition: transform 1s;
  z-index: 20;
}

.card.pop-up {
  animation: popUpAnimation 0.5s forwards;
}

@keyframes popUpAnimation {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}

.card.is-flipped {
  transform: rotateX(180deg);
}

.flipped {
  transform: rotateX(360deg);
  transition: transform 1.2s;
}

.card__face {
  position: absolute;
  backface-visibility: hidden;
}
</style>

<section class="h-screen" style="background-color: #001b35">
  <div class="grid grid-cols-5 gap-2 my-4">
    @foreach ($randomCards as $card)
      <div class="mt-20">
        <div class="card card__face">
          <img class="w-40 max-h-56" src="/Yugioh_Card_Back.jpg" alt="">
        </div>
        <div class="card1 card2">
          <img class="w-40 max-h-56" src="{{ $card->image }}" alt="">
        </div>
      </div>
    @endforeach
  </div>
</section>

<script>
var cards = document.querySelectorAll('.card');

[...cards].forEach((card) => {
  card.addEventListener('click', function() {
    card.classList.toggle('is-flipped');
    
    setTimeout(function() {
      var card1 = card.nextElementSibling;
      card1.classList.toggle('flipped');
    });
  });
});
</script>