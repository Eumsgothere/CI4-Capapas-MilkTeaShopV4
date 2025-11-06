<div class="testimonial-card">
    <p class="testimonial-text"><?= $testimonial ?></p>
    <div class="testimonial-author">— <?= $author ?></div>
</div>

<style>
    .testimonial-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        padding: 1.5rem;
        text-align: center;
        transition: transform 0.2s ease-in-out;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
    }

    .testimonial-text {
        font-size: 1rem;
        color: #444;
        margin-bottom: 1rem;
        line-height: 1.4;
    }

    .testimonial-author {
        font-weight: 700;
        color: #e36fa4;
        font-size: 0.95rem;
    }
</style>