@props(['aviso'])

@if($aviso)
<div x-data="{ abierto: true }" x-show="abierto" x-transition class="relative" >
    <div 
      x-data="countdownTimer('{{ $aviso->expira_en->format('Y-m-d\TH:i:s') }}')" 
      x-init="start()"      
      class="bg-link-600 text-white px-4 py-3 text-center text-sm md:text-base font-medium relative z-50">
      <p>
          <span class="">{{ $aviso->titulo}}</span> |
          {{ $aviso->mensaje ?? '¡Promoción activa!' }} |
            <span class="font-semibold">
              Termina en: 
              <span x-text="days"></span>d 
              <span x-text="hours"></span>h 
              <span x-text="minutes"></span>m 
              <span x-text="seconds"></span>s
            </span>
        </p>        
    </div>
    <button @click="abierto = false"  class="dark:bg-btn-400 dark:hover:bg-btn-600 bg-btn-200 hover:bg-btn-400 transition-colors duration-300 absolute top-2 right-2 text-lg font-bold text-white px-1.5 rounded-md z-50 cursor-pointer"><i class="fa-solid fa-times"></i></button>
</div>
@endif
@push('scripts')
    <script>
  function countdownTimer(targetDate) {
    return {
      days: 0,
      hours: 0,
      minutes: 0,
      seconds: 0,
      interval: null,
      start() {
        const target = new Date(targetDate).getTime();

        this.interval = setInterval(() => {
          const now = new Date().getTime();
          const distance = target - now;

          if (distance < 0) {
            clearInterval(this.interval);
            this.days = this.hours = this.minutes = this.seconds = 0;
            return;
          }

          this.days = Math.floor(distance / (1000 * 60 * 60 * 24));
          this.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          this.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          this.seconds = Math.floor((distance % (1000 * 60)) / 1000);
        }, 1000);
      }
    };
  }
</script>
@endpush

