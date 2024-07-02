<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Interfaces\DataRepositoryInterface;

// class OrderController extends Controller
// {
//     private OrderRepositoryInterface $orderRepository;

//     public function __construct(OrderRepositoryInterface $orderRepository)
//     {
//         $this->orderRepository = $orderRepository;
//     }


//     public function index(Request $request)
//     {
//         $data = $this->orderRepository->all();
//         return view('page.usertable', compact('data'));
//     }


//     public function store(Request $request)
//     {
//         $request->validate([
//             'firstname' => 'required',
//             'lastname' => 'required',
//             'country' => 'required',
//             'address1' => 'required',
//             'address2' => 'nullable',
//             'city' => 'required',
//             'state' => 'required',
//             'postcode' => 'required',
//         ]);

//         $data = $this->orderRepository->createOrder($request->all());

//         return response()->json(['data' => $data], 201);
//         view('page.create', compact('data'));
//     }


//     public function show($id)
//     {
//         $data = $this->orderRepository->find($id);
//         return view('layouts.nav', compact('data'));
//         view('page.show');
//     }


//     public function update(Request $request, string $id)
//     {
//         $request->validate([
//             'firstname' => 'required',
//             'lastname' => 'required',
//             'country' => 'required',
//             'address1' => 'required',
//             'address2' => 'required',
//             'city' => 'required',
//             'state' => 'required',
//             'postcode' => 'required',
//         ]);

//         $data = $this->orderRepository->getOrderById($id);

//         if (!$data) {
//             return response()->json(['error' => 'Order not found.'], 404);
//         }

//         $data = $this->orderRepository->updateOrder($id, $request->all());
//         return response()->json(['data' => $data]);
//     }



//     public function destroy(string $id)
//     {
//         $data = $this->orderRepository->getOrderById($id);

//         if (!$data) {
//             return response()->json(['error' => 'Order not found.'], 404);
//         }

//         $this->orderRepository->deleteOrder($id);
//         return response()->json(null, 204);
//     }
// }
