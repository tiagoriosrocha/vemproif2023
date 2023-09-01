<div class="row">
        @if($percentual < env('PERCENTUALSORTEIO'))
        <div class="p-5 text-center bg-dark">
            <div class="container py-5">
            <i class="bi bi-balloon" style="font-size: 5rem; color: white;"></i>
            <h1 class="mb-4 text-white">Seu Progresso</h1>
            
            @if($quantidade == 0) 
              <p class="col-lg-8 mx-auto lead text-white">
                Você ainda não visitou nosso estandes. Não perca tempo! Estamos esperando por você!!!
              </p>
            @else 
            <p class="col-lg-8 mx-auto lead text-white">  
              Você já visitou <span class="badge bg-white text-black">{{ $quantidade }}</span> @if($quantidade>1) estandes. @else estande. @endif Boa Sorte! 
            </p>
              <br>
              <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="{{ $percentual }}" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar-striped bg-success text-white" style='width:{{ $percentual }}%'>{{ $percentual }}%</div>              </div>
            @endif              
            
            </div>
        </div>
        @else
        <div class="p-5 text-center bg-success">
            <div class="container py-5">
            <i class="bi bi-trophy" style="font-size: 5rem; color: white;"></i>
            <h1 class="mb-4 text-white">Parabéns!!!</h1>
            <p class="col-lg-8 mx-auto lead text-white">
                Você está concorrendo ao sorteio!<br>Você já visitou <span class="badge bg-white text-black">{{ $quantidade }}</span> @if($quantidade>1) estandes. @else estande. @endif Boa Sorte!
            </p>
            <br>
            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="{{ $percentual }}" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar-striped bg-success text-white" style='width:{{ $percentual }}%'>{{ $percentual }}%</div>
            </div>
            </div>
        </div>
        @endif
    </div>
    </div>