@if(!empty($content))

<div class="row">
    @foreach($content as $key=>$c)
    @if($key < (sizeof($content)-1))
    <div class="{{isset($content[(sizeof($content)-1)]->col)?$content[(sizeof($content)-1)]->col:''}} mt-2">
        <img id="preview" src="" width="100%">
        <form id="question_type_image" class="images_files" action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-label">Image {{$key+1}}</label>
                <input type="file"  class="form-control img" name="file" accept="image/*" data-q_id="{{$question->id.$key}}">
                <input type="hidden" name="images" class="images_user{{$question->id.$key}}" data-id="{{$question->id}}" id="{{$question->id.$key}}" value="">
                <input type="hidden" id="user_upload_img" name="user_upload_img" value="">
                <input type="hidden" id="img_q_id" name="user_upload_img" value="{{$question->id.$key}}">
            </div>
        </form>
    </div> 
    @endif
    @endforeach
</div>
@endif