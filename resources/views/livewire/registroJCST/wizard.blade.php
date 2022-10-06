<div class="form">
   
    @if(!empty($successMessage))
    <div class="alert alert-success">
       {{ $successMessage }}
    </div>
    @endif
      
    <div class="text-center">
        <!-- progressbar -->
        <ul class="progressbar">
            <li class="{{ $currentStep != 1 ? '' : 'active' }}"></li>
            <li class="{{ $currentStep != 2 ? '' : 'active' }}"></li>
            <li class="{{ $currentStep != 3 ? '' : 'active' }}"></li>
        </ul>
        
    </div>
    
    @include('livewire.registroJCST.step1')
    
    @include('livewire.registroJCST.step2')
      
    @include('livewire.registroJCST.step3')

    
       
</div>

