<input type="text" 
	   name="{{$name}}" 
	   id="{{$name}}" 
	   class="{{$class}}" 
	   {{$required ? 'required' : ''}}/>

@error('name')
  <div style="color: red; margin-bottom: 10px">{{ $message }}</div>
@enderror