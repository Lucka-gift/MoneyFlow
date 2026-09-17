@extends("dashboard.index")

@section("dashboard")
<div class="p-6 space-y-6 max-w-[100vw] overflow-x-hidden pt-20">

    <!-- Section des Cartes KPI (Statistiques) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

        <!-- Carte Money -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center justify-between transition-all hover:shadow-md">
            <div>
                <p class="text-sm font-medium text-slate-500">Money</p>
                <h3 class="text-2xl font-bold text-slate-800 mt-1">1 000 AR</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-violet-50 text-violet-600 flex items-center justify-center text-lg">
                <i class="fa-solid fa-wallet"></i>
            </div>
        </div>

        <!-- Carte Rapports -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center justify-between transition-all hover:shadow-md">
            <div>
                <p class="text-sm font-medium text-slate-500">Rapports</p>
                <h3 class="text-2xl font-bold text-slate-800 mt-1">7 500 AR</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-lg">
                <i class="fa-solid fa-chart-line"></i>
            </div>
        </div>

        <!-- Carte Comptes -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center justify-between transition-all hover:shadow-md">
            <div>
                <p class="text-sm font-medium text-slate-500">Comptes</p>
                <h3 class="text-2xl font-bold text-slate-800 mt-1">0 AR</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-lg">
                <i class="fa-solid fa-building-columns"></i>
            </div>
        </div>

        <!-- Carte Budgets -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center justify-between transition-all hover:shadow-md">
            <div>
                <p class="text-sm font-medium text-slate-500">Budgets</p>
                <h3 class="text-2xl font-bold text-slate-800 mt-1">10 000 AR</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-lg">
                <i class="fa-solid fa-piggy-bank"></i>
            </div>
        </div>

    </div>

    <!-- Section des Graphiques -->
    <div class="bg-white shadow-sm border border-slate-100 rounded-2xl p-6 grid grid-cols-1 lg:grid-cols-2 gap-6 overflow-y-scroll">

        <!-- Graphique 1 -->
        <div class="bg-slate-50/50 p-4 rounded-xl border border-slate-100 flex items-center justify-center h-75">
            <canvas id="chart1" class="w-full h-full"></canvas>
        </div>

        <!-- Graphique 2 -->
        <div class="bg-slate-50/50 p-4 rounded-xl border border-slate-100 flex items-center justify-center h-75">
            <canvas id="chart2" class="w-full h-full"></canvas>
        </div>

        <!-- Graphique 3 -->
        <div class="bg-slate-50/50 p-4 rounded-xl border border-slate-100 flex items-center justify-center h-50">
            <canvas id="chart3" class="w-full h-full"></canvas>
        </div>

        <!-- Graphique 4 -->
        <div class="bg-slate-50/50 p-4 rounded-xl border border-slate-100 flex items-center justify-center h-50">
            <canvas id="chart4" class="w-full h-full"></canvas>
        </div>

    </div>

</div>
@endsection
