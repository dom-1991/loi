@props(['disabled' => false])

<input id="amount" type="number" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
<span id="amount-preview"></span>
@push('scripts')
<script>
    $(document).ready(function () {
        amountPreview();
    })
    $(document).on('keyup', '#amount', (function () {
        let amount = $(this).val()
        $('#amount-preview').text(addCommas(amount) + ' đồng')
    }))

    function amountPreview ()
    {
        let amount = $('#amount').val()
        if (amount > 0) {
            $('#amount-preview').text(addCommas(amount) + ' đồng')
        } else {
            $('#amount-preview').text('')
        }
    }

    function addCommas(nStr)
    {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }
</script>
@endpush
