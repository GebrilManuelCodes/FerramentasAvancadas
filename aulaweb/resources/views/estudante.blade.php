


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Estudantes</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-white text-slate-900">

    <main class="mx-auto max-w-[1600px] px-5 py-6 md:px-7">

        <!-- CABEÇALHO -->
        <header class="mb-8 flex items-center gap-6 rounded-2xl bg-blue-800 px-8 py-7 text-white shadow-sm">

            <div class="flex items-center justify-center">
            </div>


            <div>
                <h1 class="text-3xl font-bold tracking-tight md:text-5xl">
                    Gestão de Estudantes
                </h1>
                <p class="mt-1 text-xl text-blue-100 md:text-2xl">
                    Gebril Manuel
                </p>
            </div>

        </header>


        <!-- FORMULÁRIO DE CADASTRO -->
        <section class="mb-8 overflow-hidden rounded-2xl border-2 border-slate-200">

            <div class="inline-flex items-center gap-3 rounded-br-xl bg-blue-800 px-7 py-4 text-white">
                <h2 class="text-2xl font-bold">Novo Estudante</h2>
            </div>

            <form method="POST" class="p-6 md:p-8">
                @csrf

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-4">

                    <!-- NOME -->
                    <div>
                        <label class="mb-2 block text-lg font-bold">
                            Nome Completo
                        </label>

                        <input
                            type="text"
                            name="nome"
                            placeholder="Digite o nome completo"
                            required
                            class="w-full rounded-xl border-2 border-slate-300 px-5 py-4 text-lg outline-none transition focus:border-blue-600 focus:ring-2 focus:ring-blue-100"
                        >

                        @error('nome')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- TELEFONE -->
                    <div>
                        <label class="mb-2 block text-lg font-bold">
                            Telefone
                        </label>

                        <input
                            type="tel"
                            name="telefone"
                            placeholder="Digite o telefone"
                            required
                            class="w-full rounded-xl border-2 border-slate-300 px-5 py-4 text-lg outline-none transition focus:border-blue-600 focus:ring-2 focus:ring-blue-100"
                        >

                        @error('telefone')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- CURSO -->
                    <div>
                        <label class="mb-2 block text-lg font-bold">
                            Curso
                        </label>

                        <select
                            name="curso"
                            required
                            class="w-full rounded-xl border-2 border-slate-300 bg-white px-5 py-4 text-lg outline-none transition focus:border-blue-600 focus:ring-2 focus:ring-blue-100"
                        >
                            <option value="">Selecione o curso</option>

                            <option value="Engenharia Informática">
                                Engenharia Informática
                            </option>

                            <option value="Ciências da Computação">
                                Ciências da Computação
                            </option>

                            <option value="Sistemas de Informação">
                                Sistemas de Informação
                            </option>

                        </select>

                       
                    </div>

                </div>

                <!-- BOTÕES -->
                <div class="mt-8 flex flex-wrap gap-4">

                    <button
                        type="submit"
                        class="inline-flex items-center gap-3 rounded-xl bg-blue-800 px-7 py-4 text-lg font-bold text-white shadow-sm transition hover:bg-blue-700 active:scale-95"
                    >
                        Adicionar
                    </button>

                    <button
                        type="reset"
                        class="inline-flex items-center gap-3 rounded-xl border border-slate-300 bg-slate-200 px-7 py-4 text-lg font-bold text-slate-800 transition hover:bg-slate-300 active:scale-95"
                    >
                        Limpar
                    </button>

                </div>

            </form>
        </section>

        <!-- RODAPÉ -->
        <footer class="mt-10 border-t-2 border-slate-200 py-5 text-center text-lg text-slate-500">

            <span>Sistema Académico</span>
            <span class="mx-3">•</span>
            <span>Exercício de Programação</span>

        </footer>

    </main>

</body>
</html>

