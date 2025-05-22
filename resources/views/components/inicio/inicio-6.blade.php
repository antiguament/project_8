<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú allálettera</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .card-glass {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .offer-card {
            border-radius: 1rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .offer-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .floating-cart {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 40;
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            border-radius: 50px;
            box-shadow: 0 10px 30px rgba(238, 90, 36, 0.3);
            transition: all 0.3s ease;
        }
        
        .floating-cart:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(238, 90, 36, 0.4);
        }
        
        .cart-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #fff;
            color: #ee5a24;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        
        .cart-modal {
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(10px);
        }
        
        .cart-content {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
            max-height: 90vh;
            overflow-y: auto;
        }
        
        .whatsapp-btn {
            background: linear-gradient(135deg, #25d366, #128c7e);
            transition: all 0.3s ease;
        }
        
        .whatsapp-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(37, 211, 102, 0.3);
        }
        
        .category-btn {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }
        
        .category-btn:hover {
            background: rgba(255, 255, 255, 1);
            transform: translateY(-2px);
        }
        
        .category-btn.active {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border-color: transparent;
        }
        
        .animated-bg {
            background: linear-gradient(-45deg, #667eea, #764ba2, #f093fb, #f5576c);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }
        
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .cart-item {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        
        .cart-item:hover {
            background: rgba(255, 255, 255, 0.95);
            transform: translateX(5px);
        }
        
        .message-toast {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(16, 185, 129, 0.3);
            animation: slideIn 0.3s ease, slideOut 0.3s ease 2.7s;
        }
        
        @keyframes slideIn {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @keyframes slideOut {
            from { transform: translateX(0); opacity: 1; }
            to { transform: translateX(100%); opacity: 0; }
        }
    </style>
</head>
<body class="animated-bg">
    <!-- Floating Cart Button -->
    <button id="floating-cart-btn" class="floating-cart p-4 text-white font-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="8" cy="21" r="1"/>
            <circle cx="19" cy="21" r="1"/>
            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57L20.37 7H5.12"/>
        </svg>
        <span id="cart-badge" class="cart-badge hidden">0</span>
    </button>

    <section class="py-12 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto" id="food-section">
        <div class="glass-effect rounded-3xl p-8 mb-8">
            <div class="text-center mb-10">
                <h2 class="text-4xl font-bold text-white mb-4 drop-shadow-lg">MENÚ DE RESTAURANTE ALLÁLETTERA</h2>
                <p class="text-white/90 italic text-lg mb-6">"Delicias de nuestra tierra antioqueña, con sabor casero"</p>
                <div class="inline-block bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full border border-white/30">
                    <span class="font-semibold text-white">¡Explora nuestros platos únicos!</span>
                </div>
            </div>

            <div class="flex flex-wrap justify-center gap-3 mb-8" id="category-buttons">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6" id="products-container">
            </div>

            <div class="flex justify-center mt-8" id="pagination-container">
            </div>

            <div class="mt-10 glass-effect rounded-2xl p-6 text-white">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="mb-4 md:mb-0">
                        <h3 class="font-bold text-xl mb-1">¡Disfruta de nuestros sabores!</h3>
                        <p class="text-white/80">Pide tus favoritos y vive una experiencia culinaria única.</p>
                    </div>
                    <button id="show-all-button" class="bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white font-bold py-3 px-8 rounded-full border border-white/30 transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M8 12h8"/>
                            <path d="M12 8v8"/>
                        </svg>
                        Ver todo el menú
                    </button>
                </div>
            </div>
        </div>

        <!-- Modern Cart Modal -->
        <div id="cart-container" class="hidden fixed z-50 inset-0 cart-modal flex items-center justify-center p-4">
            <div class="cart-content w-full max-w-md max-h-[90vh] overflow-hidden">
                <div class="p-6 border-b border-gray-100 bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded-t-2xl">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-3">
                                <circle cx="8" cy="21" r="1"/>
                                <circle cx="19" cy="21" r="1"/>
                                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57L20.37 7H5.12"/>
                            </svg>
                            <h2 class="text-2xl font-bold">Mi Carrito</h2>
                        </div>
                        <button id="close-cart-button" class="text-white/80 hover:text-white transition">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18"/>
                                <line x1="6" y1="6" x2="18" y2="18"/>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div class="p-6 overflow-y-auto max-h-96">
                    <div id="cart-items" class="space-y-3 mb-6">
                        <!-- Cart items will be inserted here -->
                    </div>
                    
                    <div class="border-t border-gray-200 pt-4 mb-6">
                        <div class="flex justify-between items-center text-xl font-bold">
                            <span class="text-gray-800">Total:</span>
                            <span id="cart-total" class="text-purple-600">$0</span>
                        </div>
                    </div>
                    
                    <div class="space-y-3">
                        <button id="whatsapp-button" class="w-full whatsapp-btn text-white font-bold py-4 px-6 rounded-xl flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="mr-3">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.306"/>
                            </svg>
                            Enviar por WhatsApp
                        </button>
                        <button id="clear-cart-button" class="w-full bg-gray-500 hover:bg-gray-600 text-white font-bold py-3 px-6 rounded-xl transition">
                            Limpiar Carrito
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Get references to DOM elements
        const foodSection = document.getElementById('food-section');
        const categoryButtonsContainer = document.getElementById('category-buttons');
        const productsContainer = document.getElementById('products-container');
        const paginationContainer = document.getElementById('pagination-container');
        const showAllButton = document.getElementById('show-all-button');
        const cartContainer = document.getElementById('cart-container');
        const cartItemsContainer = document.getElementById('cart-items');
        const cartTotalElement = document.getElementById('cart-total');
        const closeCartButton = document.getElementById('close-cart-button');
        const floatingCartBtn = document.getElementById('floating-cart-btn');
        const cartBadge = document.getElementById('cart-badge');
        const whatsappButton = document.getElementById('whatsapp-button');
        const clearCartButton = document.getElementById('clear-cart-button');

        // WhatsApp phone number
        const WHATSAPP_NUMBER = '573128658195';

        // All menu items for "allálettera" restaurant
        const allProducts = [
            // Entradas
            { id: 1, name: 'Patacones Boloñesos y Gratinados x 4 und', category: 'Entradas', local: true, image: '/api/placeholder/200/200', price: 10000, oldPrice: null, discount: 0 },
            { id: 2, name: 'Patacones Boloñesos y Gratinados x 8 und', category: 'Entradas', local: true, image: '/api/placeholder/200/200', price: 16000, oldPrice: null, discount: 0 },
            { id: 3, name: 'Patacones Boloñesos y Gratinados x 12 und', category: 'Entradas', local: true, image: '/api/placeholder/200/200', price: 30000, oldPrice: null, discount: 0 },

            // Desayunos (All 18000)
            { id: 4, name: 'Huevos con Aliños', category: 'Desayunos', local: true, image: '/api/placeholder/200/200', price: 18000, oldPrice: null, discount: 0 },
            { id: 5, name: 'Huevos con Tocino', category: 'Desayunos', local: true, image: '/api/placeholder/200/200', price: 18000, oldPrice: null, discount: 0 },
            { id: 6, name: 'Huevos Rancheros', category: 'Desayunos', local: true, image: '/api/placeholder/200/200', price: 18000, oldPrice: null, discount: 0 },
            { id: 7, name: 'Huevos Sencillos', category: 'Desayunos', local: true, image: '/api/placeholder/200/200', price: 18000, oldPrice: null, discount: 0 },
            { id: 8, name: 'Calentado Especial', category: 'Desayunos', local: true, image: '/api/placeholder/200/200', price: 18000, oldPrice: null, discount: 0 },

            // Pastas (All 32000)
            { id: 9, name: 'Carbonara con Panceta y Pollo', category: 'Pastas', local: true, image: '/api/placeholder/200/200', price: 32000, oldPrice: null, discount: 0 },
            { id: 10, name: 'Gamberry 3 Quesos', category: 'Pastas', local: true, image: '/api/placeholder/200/200', price: 32000, oldPrice: null, discount: 0 },
            { id: 11, name: 'Vegetariana', category: 'Pastas', local: true, image: '/api/placeholder/200/200', price: 32000, oldPrice: null, discount: 0 },
            { id: 12, name: 'Al Tono (Atún)', category: 'Pastas', local: true, image: '/api/placeholder/200/200', price: 32000, oldPrice: null, discount: 0 },
            { id: 13, name: 'Bolognesa', category: 'Pastas', local: true, image: '/api/placeholder/200/200', price: 32000, oldPrice: null, discount: 0 },

            // Menú Especial (All 25000)
            { id: 14, name: 'Lomo Horneado a la Oriental', category: 'Menú Especial', local: true, image: '/api/placeholder/200/200', price: 25000, oldPrice: null, discount: 0 },
            { id: 15, name: 'Cordon Blue', category: 'Menú Especial', local: true, image: '/api/placeholder/200/200', price: 25000, oldPrice: null, discount: 0 },

            // Menú Típico (All 18000)
            { id: 16, name: 'Menú Típico con Res', category: 'Menú Típico', local: true, image: '/api/placeholder/200/200', price: 18000, oldPrice: null, discount: 0 },
            { id: 17, name: 'Menú Típico con Pollo', category: 'Menú Típico', local: true, image: '/api/placeholder/200/200', price: 18000, oldPrice: null, discount: 0 },
            { id: 18, name: 'Menú Típico con Cerdo', category: 'Menú Típico', local: true, image: '/api/placeholder/200/200', price: 18000, oldPrice: null, discount: 0 },
            { id: 19, name: 'Menú Típico con Chicharrón', category: 'Menú Típico', local: true, image: '/api/placeholder/200/200', price: 18000, oldPrice: null, discount: 0 },

            // Pescados
            { id: 20, name: 'Tilapia Roja', category: 'Pescados', local: true, image: '/api/placeholder/200/200', price: 35000, oldPrice: null, discount: 0 },
            { id: 21, name: 'Trucha Gratinada', category: 'Pescados', local: true, image: '/api/placeholder/200/200', price: 35000, oldPrice: null, discount: 0 },
            { id: 22, name: 'Trucha a la Plancha', category: 'Pescados', local: true, image: '/api/placeholder/200/200', price: 35000, oldPrice: null, discount: 0 },
            { id: 23, name: 'Trucha en Salsa Ganberry (Camarones)', category: 'Pescados', local: true, image: '/api/placeholder/200/200', price: 35000, oldPrice: null, discount: 0 },
            { id: 24, name: 'Cazuela de Mariscos', category: 'Pescados', local: true, image: '/api/placeholder/200/200', price: 35000, oldPrice: null, discount: 0 },

            // Frijoles Gratinados
            { id: 25, name: 'Frijoles Gratinados Ganberry', category: 'Frijoles Gratinados', local: true, image: '/api/placeholder/200/200', price: 32000, oldPrice: null, discount: 0 },
            { id: 26, name: 'Frijoles Gratinados con Chicharrón', category: 'Frijoles Gratinados', local: true, image: '/api/placeholder/200/200', price: 28000, oldPrice: null, discount: 0 },
            { id: 27, name: 'Frijoles a la Bolognesa', category: 'Frijoles Gratinados', local: true, image: '/api/placeholder/200/200', price: 28000, oldPrice: null, discount: 0 },

            // Asados
            { id: 28, name: 'Churrasco', category: 'Asados', local: true, image: '/api/placeholder/200/200', price: 28000, oldPrice: null, discount: 0 },
            { id: 29, name: 'Solomito', category: 'Asados', local: true, image: '/api/placeholder/200/200', price: 28000, oldPrice: null, discount: 0 },
            { id: 30, name: 'Pincho Trifásico 250 gr', category: 'Asados', local: true, image: '/api/placeholder/200/200', price: 28000, oldPrice: null, discount: 0 },
            { id: 31, name: 'Pincho de Pollo 250 gr', category: 'Asados', local: true, image: '/api/placeholder/200/200', price: 28000, oldPrice: null, discount: 0 },
            { id: 32, name: 'Caño a la BBQ', category: 'Asados', local: true, image: '/api/placeholder/200/200', price: 28000, oldPrice: null, discount: 0 },
            { id: 33, name: 'Pechuga a la Plancha', category: 'Asados', local: true, image: '/api/placeholder/200/200', price: 28000, oldPrice: null, discount: 0 },
            { id: 34, name: 'Pechuga Gratinada con Panceta', category: 'Asados', local: true, image: '/api/placeholder/200/200', price: 28000, oldPrice: null, discount: 0 },

            // Bebidas
            { id: 35, name: 'Chocolate', category: 'Bebidas', local: true, image: '/api/placeholder/200/200', price: 5000, oldPrice: null, discount: 0 },
            { id: 36, name: 'Café con Leche', category: 'Bebidas', local: true, image: '/api/placeholder/200/200', price: 5000, oldPrice: null, discount: 0 },
            { id: 37, name: 'Café', category: 'Bebidas', local: true, image: '/api/placeholder/200/200', price: 4000, oldPrice: null, discount: 0 },
            { id: 38, name: 'Gaseosa Personal', category: 'Bebidas', local: false, image: '/api/placeholder/200/200', price: 6000, oldPrice: null, discount: 0 },
            { id: 39, name: 'Jugos Naturales', category: 'Bebidas', local: true, image: '/api/placeholder/200/200', price: 7000, oldPrice: null, discount: 0 },
            { id: 40, name: 'Cerveza', category: 'Bebidas', local: false, image: '/api/placeholder/200/200', price: 10000, oldPrice: null, discount: 0 },
            { id: 41, name: 'Gatorade', category: 'Bebidas', local: false, image: '/api/placeholder/200/200', price: 10000, oldPrice: null, discount: 0 },

            // Adiciones
            { id: 42, name: 'Arroz Blanco', category: 'Adiciones', local: true, image: '/api/placeholder/200/200', price: 2000, oldPrice: null, discount: 0 },
            { id: 43, name: 'Arroz de Coco', category: 'Adiciones', local: true, image: '/api/placeholder/200/200', price: 4000, oldPrice: null, discount: 0 },
            { id: 44, name: 'Papa a la Francesa', category: 'Adiciones', local: true, image: '/api/placeholder/200/200', price: 5000, oldPrice: null, discount: 0 },
            { id: 45, name: 'Frijoles', category: 'Adiciones', local: true, image: '/api/placeholder/200/200', price: 8000, oldPrice: null, discount: 0 },
            { id: 46, name: 'Consomé de Bagre', category: 'Adiciones', local: true, image: '/api/placeholder/200/200', price: 10000, oldPrice: null, discount: 0 },
            { id: 47, name: 'Huevos', category: 'Adiciones', local: true, image: '/api/placeholder/200/200', price: 3000, oldPrice: null, discount: 0 },
            { id: 48, name: 'Sodas Fructificadas', category: 'Adiciones', local: true, image: '/api/placeholder/200/200', price: 10000, oldPrice: null, discount: 0 },
            { id: 49, name: 'Soda de Cereza', category: 'Adiciones', local: true, image: '/api/placeholder/200/200', price: 10000, oldPrice: null, discount: 0 },
            { id: 50, name: 'Soda de Mango Biche', category: 'Adiciones', local: true, image: '/api/placeholder/200/200', price: 10000, oldPrice: null, discount: 0 },
            { id: 51, name: 'Soda de Maracuyá', category: 'Adiciones', local: true, image: '/api/placeholder/200/200', price: 10000, oldPrice: null, discount: 0 },
            { id: 52, name: 'Soda de Liche', category: 'Adiciones', local: true, image: '/api/placeholder/200/200', price: 10000, oldPrice: null, discount: 0 },
        ];

        let selectedCategory = null;
        let productsPerPage = 8;
        let currentPage = 1;
        let showAllProductsFlag = false;
        let cart = [];

        function renderCategoryButtons(products) {
            const categories = [...new Set(products.map(product => product.category))];
            categoryButtonsContainer.innerHTML = '';

            // Create "Todos" button
            const allButton = document.createElement('button');
            allButton.textContent = 'Todos';
            allButton.classList.add('category-btn', 'px-6', 'py-3', 'rounded-full', 'text-sm', 'font-medium', 'transition');
            if (selectedCategory === null) {
                allButton.classList.add('active');
            }
            allButton.addEventListener('click', () => handleCategoryChange(null));
            categoryButtonsContainer.appendChild(allButton);

            // Create category buttons
            categories.forEach(category => {
                const button = document.createElement('button');
                button.textContent = category;
                button.classList.add('category-btn', 'px-6', 'py-3', 'rounded-full', 'text-sm', 'font-medium', 'transition');
                if (selectedCategory === category) {
                    button.classList.add('active');
                }
                button.addEventListener('click', () => handleCategoryChange(category));
                categoryButtonsContainer.appendChild(button);
            });
        }

        function handleCategoryChange(category) {
            selectedCategory = category;
            currentPage = 1;
            setShowAllProducts(false);
            renderCategoryButtons(allProducts);
            renderProducts(filterProducts());
            renderPagination(filterProducts());
        }

        function filterProducts() {
            let filtered = allProducts;
            if (selectedCategory) {
                filtered = allProducts.filter(product => product.category === selectedCategory);
            }

            if (showAllProductsFlag) {
                return filtered;
            }
            return filtered.slice((currentPage - 1) * productsPerPage, currentPage * productsPerPage);
        }

        function renderProducts(products) {
            productsContainer.innerHTML = '';
            products.forEach(product => {
                const productCard = document.createElement('div');
                productCard.classList.add('card-glass', 'rounded-2xl', 'shadow-lg', 'overflow-hidden', 'offer-card', 'border-l-4', 'border-purple-500');
                productCard.innerHTML = `
                    <div class="relative">
                        <img src="${product.image}" alt="${product.name}" class="w-full h-48 object-cover" />
                        ${product.discount > 0 ? `<span class="absolute top-3 right-3 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">-${product.discount}%</span>` : ''}
                        ${product.oldPrice === null && product.discount === 0 ? `<span class="absolute top-3 right-3 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">Nuevo</span>` : ''}
                        ${product.local ? `<span class="absolute bottom-3 left-3 bg-white/90 text-green-700 text-xs px-3 py-1 rounded-full font-medium">Local</span>` : ''}
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-lg text-gray-800 mb-2 line-clamp-2">${product.name}</h3>
                        <p class="text-gray-600 text-sm mb-3">
                            ${product.category} • ${product.local ? 'Producto local' : 'Producto importado'}
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-purple-600 font-bold text-xl">${new Intl.NumberFormat('es-CO').format(product.price)}</span>
                            ${product.oldPrice !== null ? `<span class="text-gray-400 text-sm line-through">${new Intl.NumberFormat('es-CO').format(product.oldPrice)}</span>` : ''}
                        </div>
                        <button class="w-full bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white py-3 rounded-xl transition font-semibold add-to-cart-button" data-product-id="${product.id}">
                            Agregar al carrito
                        </button>
                    </div>
                `;
                
                const addToCartButton = productCard.querySelector('.add-to-cart-button');
                addToCartButton.addEventListener('click', () => {
                    addToCart(product.id);
                });
                productsContainer.appendChild(productCard);
            });
        }

        function renderPagination(products) {
            paginationContainer.innerHTML = '';
            if (products.length > productsPerPage && !showAllProductsFlag) {
                const totalPages = Math.ceil(products.length / productsPerPage);
                
                for (let i = 1; i <= totalPages; i++) {
                    const button = document.createElement('button');
                    button.textContent = i;
                    button.classList.add('px-4', 'py-2', 'rounded-full', 'text-sm', 'font-medium', 'transition', 'mx-1');
                    if (currentPage === i) {
                        button.classList.add('bg-white', 'text-purple-600', 'shadow-lg');
                    } else {
                        button.classList.add('bg-white/20', 'text-white', 'hover:bg-white/30');
                    }
                    button.addEventListener('click', () => paginate(i));
                    paginationContainer.appendChild(button);
                }
            }
        }

        function paginate(pageNumber) {
            currentPage = pageNumber;
            renderProducts(filterProducts());
            renderPagination(filterProducts());
        }

        function setShowAllProducts(showAll) {
            showAllProductsFlag = showAll;
            currentPage = 1;
            renderProducts(filterProducts());
            renderPagination(filterProducts());

            if (showAll) {
                showAllButton.setAttribute('disabled', 'true');
                showAllButton.classList.add('opacity-50', 'cursor-not-allowed');
            } else {
                showAllButton.removeAttribute('disabled');
                showAllButton.classList.remove('opacity-50', 'cursor-not-allowed');
            }
        }

        function addToCart(productId) {
            const productToAdd = allProducts.find(product => product.id === productId);
            if (productToAdd) {
                cart.push(productToAdd);
                updateCartDisplay();
                updateCartBadge();
                displayMessage(`${productToAdd.name} añadido al carrito!`);
            }
        }

        function updateCartDisplay() {
            cartItemsContainer.innerHTML = '';
            let total = 0;
            
            if (cart.length === 0) {
                cartItemsContainer.innerHTML = `
                    <div class="text-center py-8">
                        <div class="text-gray-400 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="mx-auto">
                                <circle cx="8" cy="21" r="1"/>
                                <circle cx="19" cy="21" r="1"/>
                                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57L20.37 7H5.12"/>
                            </svg>
                        </div>
                        <p class="text-gray-500">Tu carrito está vacío</p>
                    </div>
                `;
            } else {
                cart.forEach((product, index) => {
                    const cartItem = document.createElement('div');
                    cartItem.classList.add('cart-item', 'p-4', 'mb-3');
                    cartItem.innerHTML = `
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-800 text-sm mb-1">${product.name}</h4>
                                <p class="text-purple-600 font-bold">${new Intl.NumberFormat('es-CO').format(product.price)}</p>
                            </div>
                            <button class="remove-item-button text-red-500 hover:text-red-700 transition ml-4 p-2" data-index="${index}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="3,6 5,6 21,6"/>
                                    <path d="m19,6v14a2,2 0 0,1-2,2H7a2,2 0 0,1-2-2V6m3,0V4a2,2 0 0,1,2-2h4a2,2 0 0,1,2,2v2"/>
                                    <line x1="10" y1="11" x2="10" y2="17"/>
                                    <line x1="14" y1="11" x2="14" y2="17"/>
                                </svg>
                            </button>
                        </div>
                    `;
                    cartItemsContainer.appendChild(cartItem);
                    total += product.price;
                });

                // Add event listeners to remove buttons
                const removeButtons = cartItemsContainer.querySelectorAll('.remove-item-button');
                removeButtons.forEach(button => {
                    button.addEventListener('click', (event) => {
                        const indexToRemove = event.target.closest('button').dataset.index;
                        removeFromCart(indexToRemove);
                    });
                });
            }
            
            cartTotalElement.textContent = `${new Intl.NumberFormat('es-CO').format(total)}`;
        }

        function updateCartBadge() {
            if (cart.length > 0) {
                cartBadge.textContent = cart.length;
                cartBadge.classList.remove('hidden');
                floatingCartBtn.classList.add('pulse-animation');
            } else {
                cartBadge.classList.add('hidden');
                floatingCartBtn.classList.remove('pulse-animation');
            }
        }

        function removeFromCart(index) {
            const removedProduct = cart[index];
            cart.splice(index, 1);
            updateCartDisplay();
            updateCartBadge();
            displayMessage(`${removedProduct.name} eliminado del carrito!`);
        }

        function clearCart() {
            cart = [];
            updateCartDisplay();
            updateCartBadge();
            displayMessage('Carrito limpiado!');
        }

        function sendWhatsAppMessage() {
            if (cart.length === 0) {
                displayMessage('¡Tu carrito está vacío!');
                return;
            }

            let message = `🍽️ *PEDIDO RESTAURANTE ALLÁLETTERA*\n\n`;
            message += `📋 *DETALLE DEL PEDIDO:*\n`;
            
            let total = 0;
            cart.forEach((product, index) => {
                message += `${index + 1}. ${product.name}\n`;
                message += `   💰 ${new Intl.NumberFormat('es-CO').format(product.price)}\n\n`;
                total += product.price;
            });
            
            message += `💳 *TOTAL: ${new Intl.NumberFormat('es-CO').format(total)}*\n\n`;
            message += `📍 ¡Gracias por tu pedido! Nos pondremos en contacto contigo pronto.\n\n`;
            message += `🕒 Fecha: ${new Date().toLocaleDateString('es-CO')} - ${new Date().toLocaleTimeString('es-CO')}`;

            const encodedMessage = encodeURIComponent(message);
            const whatsappUrl = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodedMessage}`;
            
            window.open(whatsappUrl, '_blank');
            
            // Clear cart after sending
            setTimeout(() => {
                clearCart();
                cartContainer.classList.add('hidden');
                displayMessage('¡Pedido enviado por WhatsApp! Gracias por tu compra. 🎉');
            }, 1000);
        }

        function displayMessage(message) {
            const messageBox = document.createElement('div');
            messageBox.classList.add('fixed', 'top-20', 'right-5', 'message-toast', 'px-6', 'py-4', 'z-50', 'font-semibold', 'shadow-xl');
            messageBox.textContent = message;
            document.body.appendChild(messageBox);

            setTimeout(() => {
                messageBox.remove();
            }, 3000);
        }

        // Event Listeners
        showAllButton.addEventListener('click', () => setShowAllProducts(true));
        
        floatingCartBtn.addEventListener('click', () => {
            cartContainer.classList.remove('hidden');
            updateCartDisplay();
        });

        closeCartButton.addEventListener('click', () => {
            cartContainer.classList.add('hidden');
        });

        whatsappButton.addEventListener('click', sendWhatsAppMessage);
        clearCartButton.addEventListener('click', clearCart);

        // Close cart when clicking outside
        cartContainer.addEventListener('click', (e) => {
            if (e.target === cartContainer) {
                cartContainer.classList.add('hidden');
            }
        });

        // Initial rendering
        renderCategoryButtons(allProducts);
        renderProducts(filterProducts());
        renderPagination(filterProducts());
    </script>
</body>
</html>