@extends('layouts.main')

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

<body>
  <section class="h-screen" style="background-color: #001b35">
    <div class="grid grid-cols-5 gap-2">
      @foreach ($randomCards as $card)
      <div class="mt-16 flex flex-col items-center justify-center">
        <div class="card card__face">
          <img class="w-40 max-h-56" src="/Yugioh_Card_Back.jpg" alt="">
        </div>
        <div class="card1 card2">
          <img class="w-40 max-h-56" src="{{ $card->image }}" alt="">
        </div>
      </div>
      @endforeach
    </div>
    <div class="flex flex-col items-end mx-20 mt-5">
      <a href="/dashboard">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-44">
          Back
        </button>
      </a>
    </div>
  </section>
</body>

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
    
    