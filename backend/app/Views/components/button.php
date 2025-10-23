<?php
$btnText = $btnText ?? 'Click Me';
$btnType = $btnType ?? 'primary';
$btnDisabled = $btnDisabled ?? false;

$classes = 'btn';
if ($btnType === 'primary') $classes .= ' btn-primary';
if ($btnType === 'secondary') $classes .= ' btn-secondary';
if ($btnType === 'bordered') $classes .= ' btn-bordered';
if ($btnDisabled) $classes .= ' btn-disabled';
?>

<button type="submit" class="<?= $classes ?>" <?= $btnDisabled ? 'disabled' : '' ?>>
    <?= $btnText ?>
</button>

<style>
    .btn {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-weight: 600;
        text-align: center;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .btn:hover:not(.btn-disabled) {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
        background-color: #e36fa4;
        color: #fff;
    }

    .btn-secondary {
        background-color: #4a90e2;
        color: #fff;
    }

    .btn-bordered {
        background: none;
        border: 2px solid #e36fa4;
        color: #e36fa4;
    }

    .btn-disabled {
        background: #ccc !important;
        color: #888 !important;
        pointer-events: none;
    }
</style>