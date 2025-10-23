<header>
    <h1>
        <a href="/" class="logo-button">
            <img src="/1758800584.685317-nobg.png" alt="Miltank Logo" class="logo-inline">
        </a>
        Miltank Tea Shop
    </h1>

    <nav>
        <a href="/">Home</a>
        <a href="/menu">Menu</a>
        <a href="/order">Your Orders</a>
        <a href="/moodboard">Mood Board</a>
        <a href="/roadmap">Road Map</a>
        <a href="/login">Login</a>
    </nav>
</header>

<style>
    header {
        background: #f6b6c4;
        color: #2f2f2f;
        padding: 1rem 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    header h1 {
        display: flex;
        align-items: center;
        gap: 0.6rem;
        font-size: 1.6rem;
        font-family: 'Lilita One', cursive;
        margin: 0;
    }

    .logo-inline {
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
    }

    nav a {
        text-decoration: none;
        background: #4a90e2;
        color: #ffffff;
        padding: 0.5rem 1rem;
        border-radius: 6px;
        margin: 0 0.3rem;
        font-weight: 500;
        transition: all 0.2s ease-in-out;
    }

    nav a:hover {
        background: #2f2f2f;
    }

    .logo-button {
        display: inline-block;
    }
</style>