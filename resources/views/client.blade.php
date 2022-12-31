<style>
    .toggle{
        visibility: hidden;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cliente') }}
        </h2>
    </x-slot>

    <div class="py-6">

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="flex mb-6">
                    <div class="w-2/4 bg-gray-500 h-12">
                        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                    Pesquisar Cliente
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text" placeholder="Digite...">
                            </div>

                            <div class="flex items-center justify-between">
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    type="button">
                                    Buscar
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="w-1/4 " style="margin-left: 20px">
                        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" style="height: 179px">
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                    Cadastrar Cliente
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text" placeholder="Digite..." hidden>
                            </div>

                            <div class="flex items-center justify-between" style="margin-top: 64px">
                                <button
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    type="button">
                                    Cadastrar
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="w-1/4 " style="margin-left: 20px">
                        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" style="height: 179px">
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                    Listar Todos os Clientes
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text" placeholder="Digite..." hidden>
                            </div>

                            <div class="flex items-center justify-between" style="margin-top: 64px">
                                <button
                                    class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    type="button" id="cliente_listar_button">
                                    Listar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col toggle" id="cliente_table">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="border-b bg-gray-700">
                                    <tr>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            #
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            First
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            Last
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            Handle
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Mark
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Otto
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            @mdo
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Jacob
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Thornton
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            @fat
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Larry
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Wild
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            @twitter
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    $(document).ready(function () {

        //TOGGLE DO BOTÃO DE LISTAR OU OCULTAR TODOS OS CLIENTES (#cliente_listar_button)
        $('#cliente_listar_button').click(function (e) { 
            e.preventDefault();
            if($('#cliente_listar_button').text() == 'Limpar'){
                console.log("está em Listar");
                $('#cliente_listar_button').text("Listar");
                $('#cliente_table').toggleClass("toggle");
            }else{
                $('#cliente_listar_button').text("Limpar");
                $('#cliente_table').toggleClass("toggle");
                console.log("está em Limpar");
            }
        });
        
    });
    
</script>
