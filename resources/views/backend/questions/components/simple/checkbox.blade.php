{{-- Checkbox --}}
<div id="checkbox_part" class="question-box" @if(isset($display)) style="display:{{$display}};" @endif>
    <div class="col-12">

        <a id="check_add" class="btn btn-success mb-2" style="color:white; margin-top:10px;">+ New</a>
    </div>
    <div class="col-12">
        <label for="">Select Display</label>
        @if(isset($content))
           @php
               $con = json_decode($content);
               foreach($con as $key => $c){
                   if(isset($c->display)){
                       $display = $c->display;
                   }
               }
           @endphp
       @endif
        @php $disp_len = 4; $max = 12; @endphp
        <select name="display_checkbox" class="form-control" id="display_checkbox">
            @for($i = 1; $i <= $disp_len; $i++)
               <option value="{{'col-'.$max/$i}}" @if(isset($display))@if($i == $display) selected @endif @endif>{{$i}}</option>
            @endfor
        </select>
    </div>
    <div id="sortable-10" class="col-12 form-group">
        @if(isset($content))
            @php
                $radioContent = json_decode($content);
            @endphp
            @foreach($radioContent as $key=>$c)
                @if(isset($c->label))
                <div  class="checkbox">
                    <label style="color:transparent">
                    <input type="checkbox"   class="check_box_q" @if(isset($c->is_checked)){{($c->is_checked==1) ? 'checked' : '' }}@endif>Option 1
                    </label>
                    <input class="check_label" type="text" value="{{$c->label}}" style="margin-left:-2vw;margin-right:5vw;z-index:20;border:none;">
                    <label >Score</label>
                    <input type="text"  class="checkbox_score"  value="{{$c->score}}" style="margin-right:1vw">
                    
                    <a class="btn btn-xs mb-2 btn-danger del-btnx" style="cursor:pointer;" data-id="11">
                        <i class="fa fa-trash" style="color:white"></i>
                            {{method_field('DELETE')}}
                    </a>
                </div>
                @endif
            @endforeach
        @else
            <div  class="checkbox">
                <label style="color:transparent">
                    <input type="checkbox" class="check_box_q">Option 1
                </label>
                <input class="check_label" type="text" value="Check1" style="margin-left:-2vw;margin-right:5vw;z-index:20;border:none;">
                <label >Score</label>
                <input type="text"  class="checkbox_score"  value="0" style="margin-right:1vw">
                
                <a class="btn btn-xs mb-2 btn-danger del-btnx" style="cursor:pointer;" data-id="11">
                    <i class="fa fa-trash" style="color:white"></i>
                        {{method_field('DELETE')}}
                </a>
            </div>
            <div class="checkbox">
                <label  style="color:transparent"><input type="checkbox" class="check_box_q" value="">Option 1 </label>  
                <input class="check_label" type="text" value="Check1" style="margin-left:-2vw;margin-right:5vw;z-index:20;border:none;">
                <label>Score</label>
                <input type="text" class="checkbox_score"  value="0" style="margin-right:1vw">
            
                <a class="btn btn-xs mb-2 btn-danger del-btnx" style="cursor:pointer;" data-id="12">
                    <i class="fa fa-trash" style="color:white"></i>
                </a>
            </div>
        @endif
    </div>
</div>
{{-- End Checkbox --}}