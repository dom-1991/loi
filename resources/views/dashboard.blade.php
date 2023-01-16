<x-app-layout>
    <div class="container mt-3 homepage">
        <div class="row">
            <div class="col-6">
                <a class="rounded shadow btn btn-primary w-100 __link" href="{{ route('reports.out') }}">
                    Chi tiêu
                </a>
            </div>
            <div class="col-6">
                <a class="rounded shadow btn btn-success w-100 __link" href="{{ route('reports.in') }}">
                    Thu nhập
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
