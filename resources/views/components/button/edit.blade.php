<button data-toggle="modal" data-target=".update{{ $target }}-form-modal-lg" style="border: none;background: none;font-size: 16px;">
	<i class="fa fa-edit"></i>
</button>
        
<!-- Update{{ $target }} modal -->
<x-modal-edit title="{{ $title }}" route="{{ $route }}" class="update{{ $target }}-form-modal-lg">
  
  {{ $slot }}
  
</x-modal-edit>
<!-- /Update{{ $target }} modal -->