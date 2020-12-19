<?php
class ProductManager
{
    private $listProduct = [];

    public function listProduct()
        /*        pubf+Tab = public function()   */
    {
        return $this->listProduct;
    }
/* Thêm sản phẩm:
Dùng hàm array_push để đẩy sản phẩm vào mảng listProduct


*/
    public function add($product)
    {
        array_push($this->listProduct, $product);
    }
    /*xoa san pham

    Dùng hàm array_splice() đẻ xóa sản phẩm tại vị trí index trong mảng listProduct */
    public function delete($index)
    {
array_splice($this->listProduct, $index );
    }
/*cap nhat

Ghi đè giá trị của phần tử tại vị trí index = $product
*/
    public function update($index, $product)
    {
        $this->listProduct [$index] = $product;
    }
/*get = lay san pham
lấy ra sản phẩm tại vị trí index trong mảng listProduct
*/
    public function get($index)
    {
     return   $this->listProduct[$index];
    }
}
