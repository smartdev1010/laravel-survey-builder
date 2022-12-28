@if(isset($content->symbol))
    @if($content->symbol == "1")
    <div class="mb-2">
        Value in €
    </div>
    @endif
@endif
@if(isset($content))
@if(isset($content->type)==1)
    <div class="mb-2 radiogroup cursorbar"><div class="d-flex">
            <div class="minus text-center">
                <i class="fas fa-minus"></i> <br>
               
                <span id="max-val">{{$content->min_value}}</span>

            </div>
            <div class="range-slider col-10">
                <div id="tooltip"></div>
              <!-- <input name="range" class="rangeslider" type="range"     min="{{$content->min_value}}" max="{{$content->max_value}}" value="{{$content->min_value}}"> -->
              <input name="b_range" class="" id="range" data-id="{{$question->id}}" type="range" min="{{$content->min_value}}" step="{{$content->steps}}" max="{{$content->max_value}}" value="{{$content->min_value}}">
              <!-- <div class="range-output text-center">
                <output class="output" name="output" for="range">
                  {{$content->min_value}}
                </output>
              </div> -->
            </div>
            <div class="plus text-center">
                <i class="fas fa-plus"></i> <br>
                <span id="min-val">{{$content->max_value}}</span>
            </div>
        </div>
    </div>
{{-- +/- Button --}}
@else
    <div class="mb-2 radiogroup cursorbar btns"><div class="d-flex">
            <button type="button" class="minus btn-minus text-center">
                -
            </button>
            <div class="input-range">
                <input name="b_range" id="{{$question->id}}" type="number" class="form-control rangevalue" min="{{$content->min_value}}" step="{{$content->steps}}" max="{{$content->max_value}}" value="{{$content->min_value}}" @if($content->symbol=="1") step="any" @endif>
            </div>
            <button type="button" class="plus btn-plus text-center">
                +
            </button>
        </div>
    </div>
@endif
@endif