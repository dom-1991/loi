<x-app-layout>
    <div class="container mt-3 homepage">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="rounded shadow {{ $price < 0 ? 'bg-danger-50' : 'bg-success-50' }} p-3">
                    <p>Lợi nhuận đã bao gồm lương:</p>
                    <p>
                        {{ number_format($price) }} đồng
                    </p>
                    @if ($priceDiff >= 0)
                        <p>
                            Tăng
                            <span class="text-primary">{{ number_format($priceDiff) }}</span>
                            so với hôm qua
                        </p>
                    @else
                        <p>
                            Giảm
                            <span class="text-danger">{{ number_format(0 - $priceDiff) }}</span>
                            so với hôm qua
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
