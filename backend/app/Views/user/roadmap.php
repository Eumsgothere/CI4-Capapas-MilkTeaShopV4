<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['page' => 'roadmap']); ?>

<body>

    <?= view('components/header'); ?>
    <?= view('components/status-button'); ?>

    <div class="page-title">
        <h2>Road Map</h2>
    </div>

    <main>
        <div class="timeline" role="list">

            <div class="left item" role="listitem">
                <div class="dot">2025</div>
                <?php
                $statusButton = renderStatusButton('done', 'Done');
                echo view('components/card', [
                    'title' => 'Setup Environment',
                    'desc' => 'Prepare project files, configure the environment, and initialize version control.',
                    'statusButton' => $statusButton
                ]);
                ?>
            </div>

            <div class="right item" role="listitem">
                <div class="dot">2025</div>
                <?php
                $statusButton = renderStatusButton('done', 'Done');
                echo view('components/card', [
                    'title' => 'Landing Page',
                    'desc' => 'Design and build the main landing page for the project.',
                    'statusButton' => $statusButton
                ]);
                ?>
            </div>

            <div class="left item" role="listitem">
                <div class="dot">2025</div>
                <?php
                $statusButton = renderStatusButton('done', 'Done');
                echo view('components/card', [
                    'title' => 'Login & Sign Up',
                    'desc' => 'Create authentication pages for users (login and signup).',
                    'statusButton' => $statusButton
                ]);
                ?>
            </div>

            <div class="right item" role="listitem">
                <div class="dot">2025</div>
                <?php
                $statusButton = renderStatusButton('done', 'Done');
                echo view('components/card', [
                    'title' => 'Mood Board',
                    'desc' => 'Showcase project colors, typography, buttons, cards, and logos.',
                    'statusButton' => $statusButton
                ]);
                ?>
            </div>

            <div class="left item" role="listitem">
                <div class="dot">2025</div>
                <?php
                $statusButton = renderStatusButton('done', 'Done');
                echo view('components/card', [
                    'title' => 'Roadmap Page',
                    'desc' => 'Outline the development flow with milestones and timeline.',
                    'statusButton' => $statusButton
                ]);
                ?>
            </div>

            <div class="right item" role="listitem">
                <div class="dot">2025</div>
                <?php
                $statusButton = renderStatusButton('inprogress', 'In Progress');
                echo view('components/card', [
                    'title' => 'Componentization',
                    'desc' => 'Break the project into reusable header, footer, buttons, and cards.',
                    'statusButton' => $statusButton
                ]);
                ?>
            </div>

            <div class="left item" role="listitem">
                <div class="dot">2025</div>
                <?php
                $statusButton = renderStatusButton('inprogress', 'In Progress');
                echo view('components/card', [
                    'title' => 'Menu Page',
                    'desc' => 'Add a Menu page displaying trading card products with descriptions, images, and pricing.',
                    'statusButton' => $statusButton
                ]);
                ?>
            </div>

            <div class="right item" role="listitem">
                <div class="dot">2025</div>
                <?php
                $statusButton = renderStatusButton('inprogress', 'In Progress');
                echo view('components/card', [
                    'title' => 'Order Page',
                    'desc' => 'Create an Order page where users can view their cart, checkout, and track order status.',
                    'statusButton' => $statusButton
                ]);
                ?>
            </div>

            <div class="left item" role="listitem">
                <div class="dot">2025</div>
                <?php
                $statusButton = renderStatusButton('backlog', 'Backlog');
                echo view('components/card', [
                    'title' => 'User CRUD (Sign Up / Sign In / Profile)',
                    'desc' => 'Create, read, update, and delete user accounts with authentication and profile management.',
                    'statusButton' => $statusButton
                ]);
                ?>
            </div>

            <div class="right item" role="listitem">
                <div class="dot">2025</div>
                <?php
                $statusButton = renderStatusButton('backlog', 'Backlog');
                echo view('components/card', [
                    'title' => 'Product CRUD (Milk Tea Menu)',
                    'desc' => 'Enable admins to add, edit, and remove milk tea flavors, toppings, and prices from the menu.',
                    'statusButton' => $statusButton
                ]);
                ?>
            </div>

            <div class="left item" role="listitem">
                <div class="dot">2025</div>
                <?php
                $statusButton = renderStatusButton('backlog', 'Backlog');
                echo view('components/card', [
                    'title' => 'Order CRUD (Customer Orders)',
                    'desc' => 'Allow customers to place orders and view status while admins manage updates and fulfillment.',
                    'statusButton' => $statusButton
                ]);
                ?>
            </div>

            <div class="right item" role="listitem">
                <div class="dot">2025</div>
                <?php
                $statusButton = renderStatusButton('backlog', 'Backlog');
                echo view('components/card', [
                    'title' => 'Finalize & Merge',
                    'desc' => 'Test thoroughly, finalize development, and merge into the main branch.',
                    'statusButton' => $statusButton
                ]);
                ?>
            </div>


        </div>
    </main>



    <?= view('components/footer'); ?>

</body>

</html>