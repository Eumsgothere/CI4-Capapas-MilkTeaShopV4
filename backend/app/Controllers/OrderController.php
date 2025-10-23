<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $session = session();
        $data['orderItems'] = $session->get('order') ?? [];
        return view('user/order', $data);
    }

    public function add()
    {
        $session = session();
        $order = $session->get('order') ?? [];

        $title = $this->request->getPost('title');
        $price = $this->request->getPost('price');

        if ($title && $price) {
            $found = false;
            foreach ($order as &$o) {
                if ($o['title'] === $title) {
                    if (!isset($o['quantity'])) $o['quantity'] = 1;
                    $o['quantity'] += 1;
                    $o['price'] = $price;
                    $found = true;
                    break;
                }
            }
            unset($o);

            if (!$found) {
                $order[] = [
                    'title' => $title,
                    'price' => $price,
                    'quantity' => 1
                ];
            }

            $session->set('order', $order);
        }

        return redirect()->to('/order');
    }

    public function update($index)
    {
        $session = session();
        $order = $session->get('order') ?? [];

        if (isset($order[$index])) {
            $quantity = (int) $this->request->getPost('quantity');
            $order[$index]['quantity'] = max(1, $quantity);
            $session->set('order', $order);
        }

        return redirect()->to('/order');
    }

    public function remove($index)
    {
        $session = session();
        $order = $session->get('order') ?? [];

        if (isset($order[$index])) {
            unset($order[$index]);
            $order = array_values($order);
            $session->set('order', $order);
        }

        return redirect()->to('/order');
    }

    public function clear()
    {
        session()->remove('order');
        return redirect()->to('/order');
    }
}
