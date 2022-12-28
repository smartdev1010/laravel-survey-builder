{{-- Single Input --}}
@php
    if(isset($content)){
        $content = json_decode($question->content);
    }
    $value = '';
    isset($content[0]->value) ? $value = $content[0]->value : '';
@endphp
<div id="single_input_part" class="question-box" @if(isset($display)) style="display:{{$display}};" @endif>
    <div class="form-group">
        <input type="text" class="form-control " placeholder="Text" value='{{$value}}'>
    </div>
</div>
{{-- End Signle Input --}}