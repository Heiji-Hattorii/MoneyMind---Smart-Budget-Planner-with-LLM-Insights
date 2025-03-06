<!DOCTYPE html><html lang="fr"><head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Dashboard Financier</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>
    <script src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1"></script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000" data-border-radius="small"></script>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <header class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Dashboard Financier  {{now()->day}}</h1>
                    <p class="mt-1 text-sm text-gray-500">Mise à jour le 15 Mars 2024 {{$jour}}</p>
                </div>
            </div>
        </header>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Dépenses Totales</p>
                        <h3 class="text-2xl font-bold text-gray-900">{{ number_format($totalExpenses, 2) }} DH</h3>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">
                        <i class="fas fa-arrow-up mr-1"></i>
                        12.5%
                    </span>
                </div>
                <div id="balance-chart" class="h-16"></div>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Budget Restant</p>
                        <h3 class="text-2xl font-bold text-gray-900">{{ number_format($remainingBudget, 2) }} DH</h3>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium bg-red-100 text-red-800">
                        <i class="fas fa-arrow-down mr-1"></i>
                        8.2%
                    </span>
                </div>
                <div id="expenses-chart" class="h-16"></div>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Objectifs Totaux</p>
                        <h3 class="text-2xl font-bold text-gray-900">{{ number_format($totalGoals, 2) }} DH</h3>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium bg-custom/10 text-custom">
                        <i class="fas fa-piggy-bank mr-1"></i>
                        85%
                    </span>
                </div>
                <div class="relative pt-1">
                    <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-200">
                        <div class="w-4/5 shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-custom"></div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Souhaits Totaux</p>
                        <h3 class="text-2xl font-bold text-gray-900">{{ number_format($totalSouhait, 2) }}</h3>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800">
                        <i class="fas fa-flag mr-1"></i>
                        60%
                    </span>
                </div>
                <div id="goals-chart" class="h-16"></div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <div class="lg:col-span-2 bg-white rounded-lg shadow">
                <div class="p-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Répartition des Dépenses</h2>
                    <div id="expenses-donut" class="h-80"></div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Santé Financière</h2>
                <div id="financial-health" class="h-64 mb-6"></div>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium text-gray-500">Taux d&#39;épargne</span>
                            <span class="text-sm font-medium text-custom">75%</span>
                        </div>
                        <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-200">
                            <div class="w-3/4 shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-custom"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium text-gray-500">Objectifs atteints</span>
                            <span class="text-sm font-medium text-custom">60%</span>
                        </div>
                        <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-200">
                            <div class="w-3/5 shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-custom"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-6 mb-8">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Conseils et Suivi</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-custom/5 rounded-lg p-4">
                    <i class="fas fa-lightbulb text-custom text-xl mb-3"></i>
                    <h3 class="font-medium text-gray-900 mb-2">Optimisation des Dépenses</h3>
                    <p class="text-sm text-gray-500">Pour mieux gérer votre budget, vous pouvez ajouter de nouvelles dépenses ou définir des objectifs financiers.</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const charts = {
                'balance-chart': {
                    type: 'line',
                    data: [150, 230, 224, 218, 135, 147, 260]
                },
                'expenses-chart': {
                    type: 'line',
                    data: [80, 95, 65, 130, 120, 85, 70]
                },
                'goals-chart': {
                    type: 'line',
                    data: [200, 230, 240, 250, 260, 270, 280]
                }
            };
            Object.entries(charts).forEach(([elementId, config]) => {
                const chart = echarts.init(document.getElementById(elementId));
                const option = {
                    animation: false,
                    grid: {
                        top: 0,
                        right: 0,
                        bottom: 0,
                        left: 0
                    },
                    xAxis: {
                        type: 'category',
                        show: false
                    },
                    yAxis: {
                        type: 'value',
                        show: false
                    },
                    series: [{
                        data: config.data,
                        type: config.type,
                        smooth: true,
                        symbol: 'none',
                        lineStyle: {
                            color: '#1a56db'
                        },
                        areaStyle: {
                            color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                                offset: 0,
                                color: 'rgba(26, 86, 219, 0.2)'
                            }, {
                                offset: 1,
                                color: 'rgba(26, 86, 219, 0)'
                            }])
                        }
                    }]
                };
                chart.setOption(option);
            });
            const donutChart = echarts.init(document.getElementById('expenses-donut'));
            const donutOption = {
                animation: false,
                tooltip: {
                    trigger: 'item'
                },
                legend: {
                    bottom: '0',
                    left: 'center'
                },
                series: [{
                    type: 'pie',
                    radius: ['40%', '70%'],
                    center: ['50%', '45%'],
                    data: [
                        { value: 3500, name: 'Logement' },
                        { value: 2500, name: 'Transport' },
                        { value: 2000, name: 'Alimentation' },
                        { value: 1500, name: 'Loisirs' },
                        { value: 1000, name: 'Autres' }
                    ],
                    label: {
                        show: false
                    },
                    emphasis: {
                        itemStyle: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }]
            };
            donutChart.setOption(donutOption);
            const healthChart = echarts.init(document.getElementById('financial-health'));
            const healthOption = {
                animation: false,
                series: [{
                    type: 'gauge',
                    startAngle: 180,
                    endAngle: 0,
                    min: 0,
                    max: 100,
                    splitNumber: 10,
                    radius: '100%',
                    axisLine: {
                        lineStyle: {
                            width: 20,
                            color: [
                                [0.3, '#ff6e76'],
                                [0.7, '#fddd60'],
                                [1, '#7cffb2']
                            ]
                        }
                    },
                    pointer: {
                        icon: 'path://M12.8,0.7l12,40.1H0.7L12.8,0.7z',
                        length: '12%',
                        width: 20,
                        offsetCenter: [0, '-60%'],
                        itemStyle: {
                            color: 'auto'
                        }
                    },
                    axisTick: {
                        length: 12,
                        lineStyle: {
                            color: 'auto',
                            width: 2
                        }
                    },
                    splitLine: {
                        length: 20,
                        lineStyle: {
                            color: 'auto',
                            width: 5
                        }
                    },
                    axisLabel: {
                        color: '#464646',
                        fontSize: 20,
                        distance: -60,
                        formatter: function(value) {
                            if (value === 0 || value === 100) {
                                return value + '';
                            }
                            return '';
                        }
                    },
                    title: {
                        offsetCenter: [0, '-20%'],
                        fontSize: 30
                    },
                    detail: {
                        fontSize: 50,
                        offsetCenter: [0, '0%'],
                        valueAnimation: true,
                        formatter: function(value) {
                            return Math.round(value) + '';
                        },
                        color: 'auto'
                    },
                    data: [{
                        value: 85,
                        name: 'Score'
                    }]
                }]
            };
            healthChart.setOption(healthOption);
            window.addEventListener('resize', function() {
                Object.keys(charts).forEach(elementId => {
                    echarts.getInstanceByDom(document.getElementById(elementId))?.resize();
                });
                donutChart.resize();
                healthChart.resize();
            });
        });
    </script>
