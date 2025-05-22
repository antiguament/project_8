<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú allálettera</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for better aesthetics and responsiveness */
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #e0f2fe 0%, #bfdbfe 50%, #93c5fd 100%);
            background-attachment: fixed;
            position: relative;
            color: #1e293b;
        }
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.1) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.1) 75%, transparent 75%, transparent);
            background-size: 100px 100px;
            pointer-events: none;
            z-index: 0;
            opacity: 0.5;
        }
        #food-section {
            position: relative;
            z-index: 1;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(16px);
            box-shadow: 0 8px 32px rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.2);
            border-radius: 20px;
        }
        .offer-card {
            border-radius: 0.75rem; /* Rounded corners */
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
        .offer-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        .offer-badge {
            border-radius: 9999px; /* Fully rounded */
            padding: 0.25rem 0.75rem;
            font-size: 0.75rem;
            font-weight: bold;
            display: inline-block;
        }
        #cart-container {
            backdrop-filter: blur(8px);
            transition: opacity 0.3s ease-in-out;
        }
        #cart-container.hidden {
            opacity: 0;
            pointer-events: none;
        }
        #cart-container:not(.hidden) {
            opacity: 1;
        }
        #cart-container .bg-white {
            transform: scale(0.95);
            opacity: 0;
            transition: transform 0.3s ease-out, opacity 0.3s ease-out;
        }
        #cart-container:not(.hidden) .bg-white {
            transform: scale(1);
            opacity: 1;
        }
        /* Estilos para el botón flotante del carrito */
        .cart-float-button {
            position: fixed;
            bottom: 20px;
            right: 90px; /* Posicionado a la izquierda del botón de WhatsApp */
            background-color: #2563eb;
            color: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(37, 99, 235, 0.3);
            transition: transform 0.3s ease;
            z-index: 1000;
            cursor: pointer;
        }
        .cart-float-button:hover {
            transform: scale(1.1);
        }
        /* Mejoras visuales para el carrito */
        #cart-container .bg-white {
            border-radius: 1rem;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
            transition: transform 0.3s ease;
        }
        #cart-items {
            max-height: 60vh;
            overflow-y: auto;
            padding-right: 10px;
        }
        #cart-items::-webkit-scrollbar {
            width: 8px;
        }
        #cart-items::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }
        #cart-items::-webkit-scrollbar-thumb {
            background: #4CAF50;
            border-radius: 4px;
        }
        /* Estilos para el botón de WhatsApp */
        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
            z-index: 1000;
        }
        .whatsapp-button:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <section class="py-12 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto bg-white/80 backdrop-blur-md rounded-xl mt-10 border border-blue-200" id="food-section">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-blue-800 mb-2">MENÚ DE RESTAURANTE ALLÁLETTERA</h2>
            <p class="text-blue-600 italic">"Delicias de nuestra tierra antioqueña, con sabor casero"</p>
            <div class="mt-4 bg-blue-100 inline-block px-4 py-2 rounded-full shadow-lg border border-blue-200">
                <span class="font-bold text-blue-700">¡Explora nuestros platos únicos!</span>
            </div>
        </div>

        <div class="flex flex-wrap justify-center gap-3 mb-8" id="category-buttons">
            </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6" id="products-container">
            </div>

        <div class="flex justify-center mt-8" id="pagination-container">
            </div>

        <div class="mt-10 bg-gradient-to-r from-blue-100 to-blue-200 rounded-xl p-6 text-blue-800 border border-blue-200 shadow-lg">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="mb-4 md:mb-0">
                    <h3 class="font-bold text-xl mb-1">¡Disfruta de nuestros sabores!</h3>
                    <p class="text-green-100">Pide tus favoritos y vive una experiencia culinaria única.</p>
                </div>
                <button id="view-cart-button" class="bg-blue-600 text-white hover:bg-blue-700 font-bold py-3 px-6 rounded-full shadow-lg transition whitespace-nowrap">
                    Ver Carrito
                </button>
            </div>
        </div>

        <div class="text-center mt-10">
            <button
                id="show-all-button"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full shadow-lg transition flex items-center mx-auto"
            >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus-circle h-5 w-5 mr-2"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
                Ver todo el menú
            </button>
        </div>
        <div id="cart-container" class="hidden fixed z-50 inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="bg-white rounded-lg shadow-xl p-6 w-full max-w-md border-2 border-blue-300">
                <h2 class="text-2xl font-semibold text-blue-800 mb-4">Carrito de Compras</h2>
                <ul id="cart-items" class="mb-4 divide-y divide-gray-200">
                    </ul>
                <div class="flex items-center justify-between py-3 px-4 bg-blue-50 rounded-lg">
                    <span class="text-lg font-medium text-gray-800">Total:</span>
                    <span id="cart-total" class="text-2xl font-bold text-blue-600">$0</span>
                </div>
                <div class="mt-6 grid grid-cols-2 gap-3">
                    <button id="close-cart-button" class="flex items-center justify-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-3 px-4 rounded-lg transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                        Cerrar
                    </button>
                    <button id="checkout-button" class="flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        Finalizar Compra
                    </button>
                </div>
            </div>
        </div>

    </section>

    <!-- Botón flotante del carrito -->
    <button class="cart-float-button" id="cart-float-button" title="Ver carrito de compras">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
    </button>

    <script>
        /**
         * Envía el pedido a WhatsApp
         */
        function sendToWhatsApp() {
            const phoneNumber = '573128658195'; // Número de WhatsApp del restaurante
            let message = '¡Hola! Me gustaría hacer el siguiente pedido:\n\n';
            
            cart.forEach((product, index) => {
                message += `${index + 1}. ${product.name} - $${new Intl.NumberFormat('es-CO').format(product.price)}\n`;
            });

            const total = cart.reduce((sum, product) => sum + product.price, 0);
            message += `\nTotal: $${new Intl.NumberFormat('es-CO').format(total)}`;

            const encodedMessage = encodeURIComponent(message);
            const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;
            window.open(whatsappUrl, '_blank');
            clearCart();
        }

        // Get references to DOM elements
        const foodSection = document.getElementById('food-section');
        const categoryButtonsContainer = document.getElementById('category-buttons');
        const productsContainer = document.getElementById('products-container');
        const paginationContainer = document.getElementById('pagination-container');
        const showAllButton = document.getElementById('show-all-button');
        const cartContainer = document.getElementById('cart-container');
        const cartItemsContainer = document.getElementById('cart-items');
        const cartTotalElement = document.getElementById('cart-total');
        const checkoutButton = document.getElementById('checkout-button');
        const closeCartButton = document.getElementById('close-cart-button');
        const viewCartButton = document.getElementById('view-cart-button');

        // All menu items for "allálettera" restaurant
        const allProducts = [
            // Entradas
            { id: 1, name: 'Patacones Boloñesos y Gratinados x 4 und', category: 'Entradas', local: true, image: 'https://placehold.co/200x200/FFD700/000000?text=Patacones+x4', price: 10000, oldPrice: null, discount: 0 },
            { id: 2, name: 'Patacones Boloñesos y Gratinados x 8 und', category: 'Entradas', local: true, image: 'https://placehold.co/200x200/FFD700/000000?text=Patacones+x8', price: 16000, oldPrice: null, discount: 0 },
            { id: 3, name: 'Patacones Boloñesos y Gratinados x 12 und', category: 'Entradas', local: true, image: 'https://placehold.co/200x200/FFD700/000000?text=Patacones+x12', price: 30000, oldPrice: null, discount: 0 },

            // Desayunos (All 18000)
            { id: 4, name: 'Huevos con Aliños', category: 'Desayunos', local: true, image: 'https://placehold.co/200x200/F0E68C/000000?text=Huevos+Aliños', price: 18000, oldPrice: null, discount: 0 },
            { id: 5, name: 'Huevos con Tocino', category: 'Desayunos', local: true, image: 'https://placehold.co/200x200/F0E68C/000000?text=Huevos+Tocino', price: 18000, oldPrice: null, discount: 0 },
            { id: 6, name: 'Huevos Rancheros', category: 'Desayunos', local: true, image: 'https://placehold.co/200x200/F0E68C/000000?text=Huevos+Rancheros', price: 18000, oldPrice: null, discount: 0 },
            { id: 7, name: 'Huevos Sencillos', category: 'Desayunos', local: true, image: 'https://placehold.co/200x200/F0E68C/000000?text=Huevos+Sencillos', price: 18000, oldPrice: null, discount: 0 },
            { id: 8, name: 'Calentado Especial', category: 'Desayunos', local: true, image: 'https://placehold.co/200x200/D2B48C/000000?text=Calentado+Esp.', price: 18000, oldPrice: null, discount: 0 },

            // Pastas (All 32000)
            { id: 9, name: 'Carbonara con Panceta y Pollo', category: 'Pastas', local: true, image: 'https://placehold.co/200x200/F5DEB3/000000?text=Carbonara', price: 32000, oldPrice: null, discount: 0 },
            { id: 10, name: 'Gamberry 3 Quesos', category: 'Pastas', local: true, image: 'https://placehold.co/200x200/F5DEB3/000000?text=Gamberry+3Q', price: 32000, oldPrice: null, discount: 0 },
            { id: 11, name: 'Vegetariana', category: 'Pastas', local: true, image: 'https://placehold.co/200x200/F5DEB3/000000?text=Vegetariana', price: 32000, oldPrice: null, discount: 0 },
            { id: 12, name: 'Al Tono (Atún)', category: 'Pastas', local: true, image: 'https://placehold.co/200x200/F5DEB3/000000?text=Pasta+Atún', price: 32000, oldPrice: null, discount: 0 },
            { id: 13, name: 'Bolognesa', category: 'Pastas', local: true, image: 'https://placehold.co/200x200/F5DEB3/000000?text=Bolognesa', price: 32000, oldPrice: null, discount: 0 },

            // Menú Especial (All 25000)
            { id: 14, name: 'Lomo Horneado a la Oriental', category: 'Menú Especial', local: true, image: 'https://placehold.co/200x200/A0522D/FFFFFF?text=Lomo+Oriental', price: 25000, oldPrice: null, discount: 0 },
            { id: 15, name: 'Cordon Blue', category: 'Menú Especial', local: true, image: 'https://placehold.co/200x200/A0522D/FFFFFF?text=Cordon+Blue', price: 25000, oldPrice: null, discount: 0 },

            // Menú Típico (All 18000)
            { id: 16, name: 'Menú Típico con Res', category: 'Menú Típico', local: true, image: 'https://placehold.co/200x200/8B4513/FFFFFF?text=Típico+Res', price: 18000, oldPrice: null, discount: 0 },
            { id: 17, name: 'Menú Típico con Pollo', category: 'Menú Típico', local: true, image: 'https://placehold.co/200x200/8B4513/FFFFFF?text=Típico+Pollo', price: 18000, oldPrice: null, discount: 0 },
            { id: 18, name: 'Menú Típico con Cerdo', category: 'Menú Típico', local: true, image: 'https://placehold.co/200x200/8B4513/FFFFFF?text=Típico+Cerdo', price: 18000, oldPrice: null, discount: 0 },
            { id: 19, name: 'Menú Típico con Chicharrón', category: 'Menú Típico', local: true, image: 'https://placehold.co/200x200/8B4513/FFFFFF?text=Típico+Chicharrón', price: 18000, oldPrice: null, discount: 0 },

            // Pescados (Assumed price 35000 as no specific prices were given)
            { id: 20, name: 'Tilapia Roja', category: 'Pescados', local: true, image: 'https://placehold.co/200x200/4682B4/FFFFFF?text=Tilapia+Roja', price: 35000, oldPrice: null, discount: 0 },
            { id: 21, name: 'Trucha Gratinada', category: 'Pescados', local: true, image: 'https://placehold.co/200x200/4682B4/FFFFFF?text=Trucha+Grat.', price: 35000, oldPrice: null, discount: 0 },
            { id: 22, name: 'Trucha a la Plancha', category: 'Pescados', local: true, image: 'https://placehold.co/200x200/4682B4/FFFFFF?text=Trucha+Plancha', price: 35000, oldPrice: null, discount: 0 },
            { id: 23, name: 'Trucha en Salsa Ganberry (Camarones)', category: 'Pescados', local: true, image: 'https://placehold.co/200x200/4682B4/FFFFFF?text=Trucha+Ganberry', price: 35000, oldPrice: null, discount: 0 },
            { id: 24, name: 'Cazuela de Mariscos', category: 'Pescados', local: true, image: 'https://placehold.co/200x200/4682B4/FFFFFF?text=Cazuela+Mariscos', price: 35000, oldPrice: null, discount: 0 },

            // Frijoles Gratinados
            { id: 25, name: 'Frijoles Gratinados Ganberry', category: 'Frijoles Gratinados', local: true, image: 'https://placehold.co/200x200/D2B48C/000000?text=Frijoles+Ganberry', price: 32000, oldPrice: null, discount: 0 },
            { id: 26, name: 'Frijoles Gratinados con Chicharrón', category: 'Frijoles Gratinados', local: true, image: 'https://placehold.co/200x200/D2B48C/000000?text=Frijoles+Chich.', price: 28000, oldPrice: null, discount: 0 },
            { id: 27, name: 'Frijoles a la Bolognesa', category: 'Frijoles Gratinados', local: true, image: 'https://placehold.co/200x200/D2B48C/000000?text=Frijoles+Bolog.', price: 28000, oldPrice: null, discount: 0 },

            // Asados (Assumed price 28000 as no specific prices were given)
            { id: 28, name: 'Churrasco', category: 'Asados', local: true, image: 'https://placehold.co/200x200/800000/FFFFFF?text=Churrasco', price: 28000, oldPrice: null, discount: 0 },
            { id: 29, name: 'Solomito', category: 'Asados', local: true, image: 'https://placehold.co/200x200/800000/FFFFFF?text=Solomito', price: 28000, oldPrice: null, discount: 0 },
            { id: 30, name: 'Pincho Trifásico 250 gr', category: 'Asados', local: true, image: 'https://placehold.co/200x200/800000/FFFFFF?text=Pincho+Trif.', price: 28000, oldPrice: null, discount: 0 },
            { id: 31, name: 'Pincho de Pollo 250 gr', category: 'Asados', local: true, image: 'https://placehold.co/200x200/800000/FFFFFF?text=Pincho+Pollo', price: 28000, oldPrice: null, discount: 0 },
            { id: 32, name: 'Caño a la BBQ', category: 'Asados', local: true, image: 'https://placehold.co/200x200/800000/FFFFFF?text=Caño+BBQ', price: 28000, oldPrice: null, discount: 0 },
            { id: 33, name: 'Pechuga a la Plancha', category: 'Asados', local: true, image: 'https://placehold.co/200x200/800000/FFFFFF?text=Pechuga+Plancha', price: 28000, oldPrice: null, discount: 0 },
            { id: 34, name: 'Pechuga Gratinada con Panceta', category: 'Asados', local: true, image: 'https://placehold.co/200x200/800000/FFFFFF?text=Pechuga+Grat.', price: 28000, oldPrice: null, discount: 0 },

            // Bebidas (Assumed prices)
            { id: 35, name: 'Chocolate', category: 'Bebidas', local: true, image: 'https://placehold.co/200x200/D2691E/FFFFFF?text=Chocolate', price: 5000, oldPrice: null, discount: 0 },
            { id: 36, name: 'Café con Leche', category: 'Bebidas', local: true, image: 'https://placehold.co/200x200/8B4513/FFFFFF?text=Cafe+Leche', price: 5000, oldPrice: null, discount: 0 },
            { id: 37, name: 'Café', category: 'Bebidas', local: true, image: 'https://placehold.co/200x200/8B4513/FFFFFF?text=Cafe', price: 4000, oldPrice: null, discount: 0 },
            { id: 38, name: 'Gaseosa Personal', category: 'Bebidas', local: false, image: 'https://placehold.co/200x200/ADD8E6/000000?text=Gaseosa', price: 6000, oldPrice: null, discount: 0 },
            { id: 39, name: 'Jugos Naturales', category: 'Bebidas', local: true, image: 'https://placehold.co/200x200/FFA500/FFFFFF?text=Jugos+Nat.', price: 7000, oldPrice: null, discount: 0 },
            { id: 40, name: 'Cerveza', category: 'Bebidas', local: false, image: 'https://placehold.co/200x200/FFD700/000000?text=Cerveza', price: 10000, oldPrice: null, discount: 0 },
            { id: 41, name: 'Gatorade', category: 'Bebidas', local: false, image: 'https://placehold.co/200x200/4169E1/FFFFFF?text=Gatorade', price: 10000, oldPrice: null, discount: 0 },

            // Adiciones (Prices given)
            { id: 42, name: 'Arroz Blanco', category: 'Adiciones', local: true, image: 'https://placehold.co/200x200/F5F5DC/000000?text=Arroz+Blanco', price: 2000, oldPrice: null, discount: 0 },
            { id: 43, name: 'Arroz de Coco', category: 'Adiciones', local: true, image: 'https://placehold.co/200x200/F5F5DC/000000?text=Arroz+Coco', price: 4000, oldPrice: null, discount: 0 },
            { id: 44, name: 'Papa a la Francesa', category: 'Adiciones', local: true, image: 'https://placehold.co/200x200/FFD700/000000?text=Papa+Francesa', price: 5000, oldPrice: null, discount: 0 },
            { id: 45, name: 'Frijoles', category: 'Adiciones', local: true, image: 'https://placehold.co/200x200/8B4513/FFFFFF?text=Frijoles', price: 8000, oldPrice: null, discount: 0 },
            { id: 46, name: 'Consomé de Bagre', category: 'Adiciones', local: true, image: 'https://placehold.co/200x200/B0C4DE/000000?text=Consome+Bagre', price: 10000, oldPrice: null, discount: 0 },
            { id: 47, name: 'Huevos', category: 'Adiciones', local: true, image: 'https://placehold.co/200x200/F0E68C/000000?text=Huevos', price: 3000, oldPrice: null, discount: 0 },
            { id: 48, name: 'Sodas Fructificadas', category: 'Adiciones', local: true, image: 'https://placehold.co/200x200/98FB98/000000?text=Sodas+Fruct.', price: 10000, oldPrice: null, discount: 0 },
            { id: 49, name: 'Soda de Cereza', category: 'Adiciones', local: true, image: 'https://placehold.co/200x200/DC143C/FFFFFF?text=Soda+Cereza', price: 10000, oldPrice: null, discount: 0 },
            { id: 50, name: 'Soda de Mango Biche', category: 'Adiciones', local: true, image: 'https://placehold.co/200x200/FFC107/000000?text=Soda+Mango', price: 10000, oldPrice: null, discount: 0 },
            { id: 51, name: 'Soda de Maracuyá', category: 'Adiciones', local: true, image: 'https://placehold.co/200x200/FFD700/000000?text=Soda+Maracuya', price: 10000, oldPrice: null, discount: 0 },
            { id: 52, name: 'Soda de Liche', category: 'Adiciones', local: true, image: 'https://placehold.co/200x200/F5DEB3/000000?text=Soda+Liche', price: 10000, oldPrice: null, discount: 0 },
        ];

        let selectedCategory = null;
        let productsPerPage = 8;
        let currentPage = 1;
        let showAllProductsFlag = false;
        let cart = [];

        /**
         * Renders the category filter buttons.
         * @param {Array} products - The array of all products to extract categories from.
         */
        function renderCategoryButtons(products) {
            const categories = [...new Set(products.map(product => product.category))];
            categoryButtonsContainer.innerHTML = ''; // Clear existing buttons

            // Create and append a "Todos" (All) button
            const allButton = document.createElement('button');
            allButton.textContent = 'Todos';
            allButton.classList.add('px-4', 'py-2', 'rounded-full', 'text-sm', 'font-medium', 'transition');
            if (selectedCategory === null) {
                allButton.classList.add('bg-green-600', 'text-white');
            } else {
                allButton.classList.add('bg-white', 'text-green-700', 'border', 'border-green-300', 'hover:bg-green-50');
            }
            allButton.addEventListener('click', () => handleCategoryChange(null));
            categoryButtonsContainer.appendChild(allButton); // Append to the end, then prepend later if needed

            // Create and append buttons for each unique category
            categories.forEach(category => {
                const button = document.createElement('button');
                button.textContent = category;
                button.classList.add('px-4', 'py-2', 'rounded-full', 'text-sm', 'font-medium', 'transition');
                if (selectedCategory === category) {
                    button.classList.add('bg-green-600', 'text-white');
                } else {
                    button.classList.add('bg-white', 'text-green-700', 'border', 'border-green-300', 'hover:bg-green-50');
                }
                button.addEventListener('click', () => handleCategoryChange(category));
                categoryButtonsContainer.appendChild(button);
            });
        }

        /**
         * Handles the change of selected category.
         * @param {string|null} category - The selected category or null for all products.
         */
        function handleCategoryChange(category) {
            selectedCategory = category;
            currentPage = 1; // Reset to first page on category change
            setShowAllProducts(false); // Disable "Show All" when filtering by category
            renderCategoryButtons(allProducts);
            renderProducts(filterProducts());
            renderPagination(filterProducts());
        }

        /**
         * Filters products based on the selected category and 'show all' flag.
         * @returns {Array} - The filtered list of products.
         */
        function filterProducts() {
            let filtered = allProducts;
            if (selectedCategory) {
                filtered = allProducts.filter(product => product.category === selectedCategory);
            }

            if (showAllProductsFlag) {
                return filtered; // Return all filtered products if showAll is true
            }
            // Return only the current page's products if not showing all
            return filtered.slice((currentPage - 1) * productsPerPage, currentPage * productsPerPage);
        }

        /**
         * Renders the product cards in the products container.
         * @param {Array} products - The array of products to display.
         */
        function renderProducts(products) {
            productsContainer.innerHTML = ''; // Clear existing products
            products.forEach(product => {
                const productCard = document.createElement('div');
                productCard.classList.add('bg-white', 'rounded-xl', 'shadow-lg', 'overflow-hidden', 'offer-card', 'transition-all', 'duration-300', 'hover:shadow-xl', 'border', 'border-blue-100');
                productCard.innerHTML = `
                    <div class="relative">
                        <img src="${product.image}" alt="${product.name}" class="w-full h-48 object-cover" onerror="this.onerror=null;this.src='https://placehold.co/200x200/cccccc/000000?text=Imagen+no+disponible';" />
                        ${product.discount > 0 ? `<span class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full offer-badge">-${product.discount}%</span>` : ''}
                        ${product.oldPrice === null && product.discount === 0 ? `<span class="absolute top-2 right-2 bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded-full offer-badge">Nuevo</span>` : ''}
                        ${product.local ? `<span class="absolute bottom-2 left-2 bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Local</span>` : ''}
                    </div>
                    <div class="p-4">
                        <div class="flex items-start justify-between">
                            <h3 class="font-bold text-lg text-green-800 mb-1">${product.name}</h3>
                        </div>
                        <p class="text-gray-600 text-sm mb-2">
                            ${product.category}, ${product.local ? 'Producto local' : 'Producto importado'}
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-500 font-bold text-lg">$${new Intl.NumberFormat('es-CO').format(product.price)}</span>
                            ${product.oldPrice !== null ? `<span class="text-gray-400 text-sm line-through">$${new Intl.NumberFormat('es-CO').format(product.oldPrice)}</span>` : ''}
                        </div>
                        <button class="mt-3 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition add-to-cart-button" data-product-id="${product.id}">
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

        /**
         * Renders the pagination buttons.
         * @param {Array} products - The array of products to determine pagination.
         */
        function renderPagination(products) {
            paginationContainer.innerHTML = ''; // Clear existing pagination
            if (products.length > productsPerPage && !showAllProductsFlag) {
                const totalPages = Math.ceil(products.length / productsPerPage);
                const visiblePages = Array.from({ length: totalPages }, (_, i) => i + 1);
                const displayedPages = [];
                let previousPage = 0;

                // Logic to display a limited number of pages with "..." in between
                visiblePages.forEach(page => {
                    if (page === 1 || page === currentPage || page === currentPage - 1 || page === currentPage + 1 || page === totalPages) {
                        displayedPages.push(page);
                        previousPage = page;
                    } else if (page - previousPage > 1) {
                        displayedPages.push('...');
                        displayedPages.push(page);
                        previousPage = page;
                    }
                });

                displayedPages.forEach(page => {
                    if (page === '...') {
                        const span = document.createElement('span');
                        span.textContent = '...';
                        span.classList.add('px-4', 'py-2', 'text-gray-500');
                        paginationContainer.appendChild(span);
                    } else {
                        const button = document.createElement('button');
                        button.textContent = page;
                        button.classList.add('px-4', 'py-2', 'rounded-full', 'text-sm', 'font-medium', 'transition');
                        if (currentPage === page) {
                            button.classList.add('bg-green-600', 'text-white');
                        } else {
                            button.classList.add('bg-white', 'text-green-700', 'border', 'border-green-300', 'hover:bg-green-50');
                        }
                        button.addEventListener('click', () => paginate(page));
                        paginationContainer.appendChild(button);
                    }
                });
            }
        }

        /**
         * Changes the current page for pagination.
         * @param {number} pageNumber - The page number to navigate to.
         */
        function paginate(pageNumber) {
            currentPage = pageNumber;
            renderProducts(filterProducts());
            renderPagination(filterProducts());
        }

        /**
         * Toggles the display of all products or paginated products.
         * @param {boolean} showAll - True to show all products, false to paginate.
         */
        function setShowAllProducts(showAll) {
            showAllProductsFlag = showAll;
            currentPage = 1; // Reset to first page when toggling "show all"
            renderProducts(filterProducts());
            renderPagination(filterProducts()); // Pagination will be hidden if showAll is true

            // Disable/enable the "Ver todo el menú" button based on state
            if (showAll) {
                showAllButton.setAttribute('disabled', 'true');
                showAllButton.classList.add('opacity-50', 'cursor-not-allowed');
            } else {
                showAllButton.removeAttribute('disabled');
                showAllButton.classList.remove('opacity-50', 'cursor-not-allowed');
            }
        }

        /**
         * Adds a product to the shopping cart.
         * @param {number} productId - The ID of the product to add.
         */
        function addToCart(productId) {
            const productToAdd = allProducts.find(product => product.id === productId);
            if (productToAdd) {
                cart.push(productToAdd);
                updateCartDisplay();
                // Instead of alert, use a custom message box or toast notification
                displayMessage(`${productToAdd.name} se ha añadido al carrito!`);
            }
        }

        /**
         * Updates the display of items in the shopping cart modal.
         */
        function updateCartDisplay() {
            cartItemsContainer.innerHTML = ''; // Clear existing cart items
            let total = 0;
            cart.forEach((product, index) => {
                const li = document.createElement('li');
                li.classList.add('flex', 'items-center', 'gap-4', 'p-4', 'hover:bg-gray-50', 'transition-colors', 'duration-200', 'border-b', 'border-gray-100');
                li.innerHTML = `
                    <div class="w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h4 class="font-medium text-gray-900">${product.name}</h4>
                        <p class="text-sm text-gray-500">${product.category}</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="font-medium text-green-600">$${new Intl.NumberFormat('es-CO').format(product.price)}</span>
                        <button class="remove-item-button w-8 h-8 flex items-center justify-center rounded-full bg-red-100 text-red-600 hover:bg-red-200 transition-colors duration-200" 
                                data-index="${index}" 
                                title="Eliminar del carrito">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                `;
                cartItemsContainer.appendChild(li);
                total += product.price;
            });
            cartTotalElement.textContent = `$${new Intl.NumberFormat('es-CO').format(total)}`;

            // Add event listeners to the remove buttons
            const removeButtons = cartItemsContainer.querySelectorAll('.remove-item-button');
            removeButtons.forEach(button => {
                button.addEventListener('click', (event) => {
                    const indexToRemove = event.currentTarget.dataset.index;
                    removeFromCart(indexToRemove);
                });
            });
        }

        /**
         * Removes a product from the shopping cart by its index.
         * @param {number} index - The index of the item to remove from the cart array.
         */
        function removeFromCart(index) {
            cart.splice(index, 1);
            updateCartDisplay();
            displayMessage('Producto eliminado del carrito!');
        }

        /**
         * Clears all items from the shopping cart.
         */
        function clearCart() {
            cart = [];
            updateCartDisplay();
            cartContainer.classList.add('hidden'); // Hide the cart modal
            displayMessage('¡Gracias por su compra!');
        }

        /**
         * Displays a custom message box instead of alert().
         * @param {string} message - The message to display.
         */
        function displayMessage(message) {
            const messageBox = document.createElement('div');
            messageBox.classList.add('fixed', 'bottom-5', 'right-5', 'bg-green-700', 'text-white', 'px-6', 'py-3', 'rounded-lg', 'shadow-lg', 'z-50', 'transition-opacity', 'duration-300', 'opacity-0', 'transform', 'translate-y-5');
            messageBox.textContent = message;
            document.body.appendChild(messageBox);

            // Animate in
            setTimeout(() => {
                messageBox.classList.remove('opacity-0', 'translate-y-5');
                messageBox.classList.add('opacity-100', 'translate-y-0');
            }, 10);

            // Animate out and remove after a delay
            setTimeout(() => {
                messageBox.classList.remove('opacity-100', 'translate-y-0');
                messageBox.classList.add('opacity-0', 'translate-y-5');
                messageBox.addEventListener('transitionend', () => messageBox.remove());
            }, 3000);
        }

        // Event Listeners
        showAllButton.addEventListener('click', () => setShowAllProducts(true));
        viewCartButton.addEventListener('click', () => {
            cartContainer.classList.remove('hidden');
            updateCartDisplay();
        });

        closeCartButton.addEventListener('click', () => {
            cartContainer.classList.add('hidden');
        });

        // Evento para el botón flotante del carrito
        document.getElementById('cart-float-button').addEventListener('click', () => {
            cartContainer.classList.remove('hidden');
            updateCartDisplay();
        });

        checkoutButton.addEventListener('click', () => {
            if (cart.length > 0) {
                sendToWhatsApp();
            } else {
                displayMessage('¡El carrito está vacío!');
            }
        });

        // Initial rendering
        renderCategoryButtons(allProducts);
        renderProducts(filterProducts());
        renderPagination(filterProducts());
    </script>

    <!-- Botón de WhatsApp -->
    <a href="https://wa.me/573128658195" target="_blank" class="whatsapp-button" title="Contactar por WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
        </svg>
    </a>
</body>
</html>