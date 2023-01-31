<x-app-layout>
    <div class="container mt-3 homepage">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="rounded shadow {{ $price < 0 ? 'bg-danger-50' : 'bg-success-50' }} p-3">
                    <p>Doanh thu hôm nay:</p>
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
            @foreach ($reportToday as $report)
                <div class="col-12 mb-3">
                    <div class="rounded shadow {{ $report->action == \App\Enums\ReportAction::SUB ? 'bg-danger-50' : 'bg-success-50' }} p-3">
                        <p>
                            <span>{{ $report->type ? \App\Enums\ReportType::getLabel()[$report->type] : '' }}</span>
                            <span class="{{ $report->action == \App\Enums\ReportAction::SUB ? 'text-danger' : 'text-success' }}">
                                {{ $report->action == \App\Enums\ReportAction::SUB ? '-' : '+' }}{{ number_format($report->amount) }}
                            </span>
                            đồng
                        </p>
                        <div>
                            {!! nl2br($report->note) !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
