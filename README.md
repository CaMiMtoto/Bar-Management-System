# **Bar Management System Features**

## **1. User Management**

- **Admin**: Manage all operations, including stock and orders.
- **Waiter**: Handle customer orders, view product availability, and place orders.
- **Customer**: Ability to log in, place orders online, and view past orders and balances.

## **2. Product and Category Management**

- **Product Categories**:
    - Beers
    - Food
    - Drinks (Non-alcoholic beverages)
    - Other items (snacks, etc.)

- **Products**:
    - Ability to add, edit, and delete products.
    - Assign each product to a category.
    - Set product price and description.

## **3. Stock Management**

- **Product Stock**:
    - Keep track of the available stock for each product.
    - Automatic stock reduction when an order is placed.
    - Stock alerts for low inventory (e.g., send notifications or show alerts when stock is below a threshold).

- **Stock Adjustments**:
    - Add or remove stock manually when necessary (e.g., receiving new stock, wastage, etc.).

## **4. Order Management**

- **Customer Orders**:
    - Waiters can create orders on behalf of customers.
    - Customers can log in and place orders directly before arriving or for delivery.
    - Track order status: Pending, Paid, Delivered.

- **Order Items**:
    - Add multiple products to an order with quantities.
    - Ability to modify order items before confirming.

- **Order History**:
    - Customers can view their past orders.
    - Waiters and admins can track completed orders for any customer.

## **5. Payment Management**

- **Payment Methods**:
    - **Cash**: Direct payment upon order completion.
    - **Mobile Money (USSD)**: Customers pay using USSD, and the transaction is confirmed by showing the payment
      message.

- **Payment Confirmation**:
    - Store payment information (transaction ID, phone number).
    - Ability to track payments made via mobile money with pending or confirmed status.

- **Balance Management**:
    - Keep track of customers who opt to pay later.
    - Show outstanding balances in customer profiles for both the customer and admin to view.

## **6. Reporting and Analytics**

- **Sales Report**:
    - View total sales by day, week, month, or custom period.
    - Filter sales reports by categories (e.g., Beers vs. Food sales).

- **Stock Report**:
    - View current stock levels and low-stock alerts.
    - Stock history: Track stock increases (e.g., deliveries) and decreases (e.g., sales, wastage).

- **Revenue Reports**:
    - Total revenue vs. outstanding balances.
    - Payment method breakdown (cash vs. mobile money).

## **7. Notifications**

- **Stock Notifications**:
    - Notify admin when stock is running low on key items.

- **Order Notifications**:
    - Waiters and managers receive real-time updates when customers place orders online.

- **Payment Notifications**:
    - Notify admin/waiter when a customer confirms payment using mobile money.

- **Balance Reminders**:
    - Notify customers with outstanding balances to encourage payment.

## **8. Innovative Features**

- **Online Ordering for Customers**:
    - Customers can log in, browse the menu, and place orders before arriving at the bar.
    - Customers can also request delivery.

- **Customer Loyalty Program** (Optional):
    - Reward customers for frequent orders or large purchases with points or discounts.

- **Order Suggestions**:
    - Suggest popular items to customers when they place orders based on previous orders.

## **9. Waiter-Friendly Features**

- **Quick Order Management**:
    - Waiters can quickly add orders from customers, including multiple items in a single order.

- **Order Status**:
    - View and manage orders by status (pending, paid, delivered).

- **Payment Confirmation**:
    - Waiters can confirm payment upon receipt, either cash or by verifying mobile money payments.

---

### **Database Models Overview**

| **Model**                     | **Description**                                    |
|-------------------------------|----------------------------------------------------|
| `Category`                    | Categories for products (e.g., Beers, Food)        |
| `Product`                     | Products sold at the bar (e.g., beers, food items) |
| `Stock`                       | Tracks stock levels for products                   |
| `Order`                       | Represents customer orders                         |
| `Payment`                     | Manages payment details for orders                 |
| `User`                        | Admin, waiter, and customer profiles               |
| `Order_Product` (pivot table) | Links orders to products and stores quantities     |

---

### **Models and Migrations Structure**

1. **Category**: Manages product categories (e.g., beers, food).
2. **Product**: Defines items for sale with price and category relationships.
3. **Stock**: Tracks available stock for each product.
4. **Order**: Records customer orders, including waiter and customer info.
5. **Order_Product** (Pivot): Stores order details, including product quantities.
6. **Payment**: Records payment details, including mobile money transactions.
7. **User**: Manages roles (admin, waiter, customer) and credentials.

