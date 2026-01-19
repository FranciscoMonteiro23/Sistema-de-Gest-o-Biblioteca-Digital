<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo - Biblioteca Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in {
            animation: fadeIn 1s ease-out;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 min-h-screen flex items-center justify-center">
    <div class="container mx-auto px-4 py-12">
        <!-- Card Principal -->
        <div class="max-w-3xl mx-auto bg-white rounded-3xl shadow-2xl overflow-hidden fade-in">
            <!-- Header com Gradiente -->
            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 px-8 py-16 text-center">
                <div class="float-animation inline-block mb-6">
                    <i class="fas fa-book-open text-white text-9xl"></i>
                </div>
                <h1 class="text-6xl font-bold text-white mb-4">
                    Biblioteca Digital
                </h1>
                <p class="text-indigo-100 text-2xl">
                    Sistema de Gestão de Livros
                </p>
            </div>

            <!-- Conteúdo -->
            <div class="p-12">
                <!-- Botões de Acesso -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('books.index') }}" class="group bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-bold py-5 px-10 rounded-xl shadow-lg transition transform hover:scale-105 text-center text-lg">
                        <i class="fas fa-book mr-2 group-hover:rotate-12 transition-transform"></i>
                        Acessar Livros
                    </a>
                    <a href="{{ route('categories.index') }}" class="group bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white font-bold py-5 px-10 rounded-xl shadow-lg transition transform hover:scale-105 text-center text-lg">
                        <i class="fas fa-tags mr-2 group-hover:rotate-12 transition-transform"></i>
                        Acessar Categorias
                    </a>
                </div>
            </div>

            <!-- Footer -->
            <div class="bg-gray-50 px-8 py-6 border-t">
                <p class="text-center text-gray-600">
                    <i class="fas fa-graduation-cap text-indigo-600"></i> Francisco Monteiro - a22405043
                </p>
                <p class="text-center text-gray-500 text-sm mt-2">
                    PSW1 - Programação Web Servidor I - 2025/2026
                </p>
            </div>
        </div>
    </div>
</body>
</html>