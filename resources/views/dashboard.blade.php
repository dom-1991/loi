<x-app-layout>
    <div class="container mt-3 homepage">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="rounded shadow {{ $price < 0 ? 'bg-danger' : 'bg-success' }} p-3">
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
            <div class="col-6 mb-3">
                <a class="rounded shadow btn btn-primary w-100 __link" href="{{ route('reports.out') }}">
                    Chi tiêu
                </a>
            </div>
            <div class="col-6 mb-3">
                <a class="rounded shadow btn btn-success w-100 __link" href="{{ route('reports.in') }}">
                    Thu nhập
                </a>
            </div>
            <div class="col-6 mb-3">
                <a class="rounded shadow btn btn-light w-100 __link" href="{{ route('users.index') }}">
                    Nhân viên
                </a>
            </div>
            <div class="col-6 mb-3">
                <a class="rounded shadow btn btn-light w-100 __link" href="{{ route('reports.index') }}">
                    Thống kê
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
