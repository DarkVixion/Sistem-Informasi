@extends('AdminTemplate')
@section('isiAdmin')
<div class="card-body">
    <div class="row">
        <div class="colmd-6">
            <div class="form-group">
                <label>Isi Data</label>
                <select class="select2 select2-hidden-accessible" multiple data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                    <option data-select2-id="33">Alabama</option>
                    <option data-select2-id="34">Alaska</option>
                    <option data-select2-id="35">California</option>
                    <option data-select2-id="36">Delaware</option>
                    <option data-select2-id="37">Tennessee</option>
                    <option data-select2-id="38">Texas</option>
                    <option data-select2-id="39">Washington</option>
                </select>
                <span class="select2 select2-container select2-container--default select2-container--focus select2-container--below select2-container--open" dir="ltr" data-select2-id="8" style="width: 100%;">
                    <span class="selection">
                        <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="true" tabindex="-1" aria-disabled="false" aria-owns="select2-3j2q-results" aria-activedescendant="select2-3j2q-result-c4fv-Texas">
                        <ul class="select2-selection__rendered">
                            <li class="select2-search select2-search--inline">
                                <input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Select a State" aria-controls="select2-3j2q-results" style="width: 492.5px;" aria-activedescendant="select2-3j2q-result-c4fv-Texas"></li>
                        </ul>
                        </span>
                    </span>
                    <span class="dropdown-wrapper" aria-hidden="true">
                    </span>
                </span>
            </div>    
        </div>
    </div>
    <h5>Custom Color Variants<h5>
    <div class="row">

    </div>
</div>
    
@endsection