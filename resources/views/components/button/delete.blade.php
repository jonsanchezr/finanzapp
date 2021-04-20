<button data-toggle="modal" data-target=".delete{{ $target }}-form-modal-sm" style="border: none;background: none;font-size: 16px;">
        <i class="fa fa-trash"></i>
</button>
        
<!-- Delete{{ $target }} modal -->
<x-modal-delete title="{{ $title }}" route="{{ $route }}" class="delete{{ $target }}-form-modal-sm">
  
  {{ $slot }}
  
</x-modal-delete>
<!-- /Delete{{ $target }} modal -->
