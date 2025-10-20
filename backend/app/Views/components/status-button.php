<?php
function renderStatusButton($statusClass = 'backlog', $statusText = 'Backlog')
{
    return "<button class='status-button $statusClass'>$statusText</button>";
}
?>
<style>
    .status-button {
        display: inline-block;
        margin-top: 10px;
        padding: 6px 10px;
        border-radius: 12px;
        color: #fff;
        font-weight: 700;
        font-size: 13px;
        cursor: pointer;
        border: none;
    }

    .backlog {
        background: #9e9e9e;
    }

    .inprogress {
        background: #3498db;
    }

    .done {
        background: #673ab7;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.status-button').forEach(button => {
            const states = ["Backlog", "In Progress", "Done"];
            const classes = ["backlog", "inprogress", "done"];
            let current = states.indexOf(button.textContent);

            button.addEventListener('click', () => {
                button.classList.remove(classes[current]);
                current = (current + 1) % states.length;
                button.textContent = states[current];
                button.classList.add(classes[current]);
            });
        });
    });
</script>