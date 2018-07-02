<?php

namespace Suretly\LenderApi\Api;

use Suretly\LenderApi\Exception\ResponseErrorException;
use Suretly\LenderApi\Model\NewOrder;
use Suretly\LenderApi\Model\Order;
use Suretly\LenderApi\Model\OrderStatus;

/**
 * Interface OrderApiInterface
 * @package Suretly\LenderApi\Api
 */
interface OrderApiInterface
{
    /**
     * Получение заявки по id
     *
     * @param string $id
     * @return Order
     * @throws \JsonMapper_Exception
     * @throws ResponseErrorException
     */
    public function getOrder($id);

    /**
     * Получение ссылки на заявку для поручителя
     *
     * @param string $id
     * @return string
     * @throws ResponseErrorException
     */
    public function getOrderPublicUrl($id);

    /**
     * Создание заявки
     *
     * @param NewOrder $newOrder
     * @return mixed
     * @throws \JsonMapper_Exception
     * @throws ResponseErrorException
     */
    public function postNewOrder(NewOrder $newOrder);

    /**
     * Загрузка файла с фото заемщика
     *
     * @param string $id
     * @param string $realPathToFile
     * @param string $filename
     * @throws ResponseErrorException
     */
    public function postUploadImageOrder($id, $realPathToFile, $filename);

    /**
     * Получение статуса заявки
     *
     * @param string $id
     * @return OrderStatus
     * @throws \JsonMapper_Exception
     * @throws ResponseErrorException
     */
    public function getOrderStatus($id);

    /**
     * Отмена заявки
     *
     * @param string $id
     * @throws ResponseErrorException
     */
    public function postOrderStop($id);

    /**
     * Подтверждение что заявка оплачена и выдана
     *
     * @param string $id
     * @throws ResponseErrorException
     */
    public function postOrderIssued($id);

    /**
     * Публикация заявки для поиска поручителей
     *
     * @param string $id
     * @throws ResponseErrorException
     */
    public function postOrderPublished($id);

    /**
     * Отметить займ как выплаченный
     *
     * @param string $id
     * @throws ResponseErrorException
     */
    public function postOrderPaid($id);

    /**
     * Отметить займ как выплаченный частично
     *
     * @param string $id
     * @param float $sum
     * @throws ResponseErrorException
     */
    public function postOrderPartialPaid($id, $sum);

    /**
     * Отметить займ как просроченный
     *
     * @param string $id
     * @throws ResponseErrorException
     */
    public function postOrderUnpaid($id);

    /**
     * Получение суммы вознаграждения за пролонгацию займа
     *
     * @param string $id
     * @param int $days
     * @return float
     * @throws ResponseErrorException
     */
    public function getOrderProlong($id, $days);

    /**
     * Пролонгация займа
     *
     * @param string $id
     * @param int $days
     * @throws ResponseErrorException
     */
    public function postOrderProlong($id, $days);
}