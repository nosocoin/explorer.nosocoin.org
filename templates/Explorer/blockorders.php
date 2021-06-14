<?php
    $this->assign('title', __('Block Orders').' - ');
?>
        <main>
            <div class="container px-4 py-5">
                <h2 class="pb-2 border-bottom"><?= __('Block Orders') ?></h2>
                <?php if (isset($orders)): ?>
                <p><?= __('Block') ?>: <?= $this->Html->link(
                    ($this->request->getParam('pass')[0]),
                    [
                        'controller'=>'Explorer',
                        'action'=>'block',
                        ($this->request->getParam('pass')[0])
                    ]
                ) ?></p>
                    <?php if (count($orders)>0): ?>
                <div class="table-responsive">
                    <table class="table table-triped">
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Timestamp</th>
                                <th>Reference</th>
                                <th>Transfers</th>
                                <th>Fee</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $order): ?>
                            <tr>
                                <td><?= $this->Html->link(
                                    $order->orderID,
                                    ['controller'=>'Explorer', 'action'=>'order', $order->orderID]
                                ) ?></td>
                                <td><?= h($order->Timestamp) ?></td>
                                <td><?= h($order->reference) ?></td>
                                <td><?= h($order->transfers) ?></td>
                                <td><?= h($order->Fee) ?></td>
                                <td><?= h($order->Amount) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                    <?php else: ?>
                    <p><?= __('No orders on this block') ?></p>
                    <?php endif; ?>
                <?php else: ?>
                <p><?= __('Something went wrong') ?></p>
                <?php endif; ?>
            </div>
        </main>
