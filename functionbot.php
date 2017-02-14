<?php

function t1($tt1)
{
	$messages = [
		'type' => 'text',
		'text' => $tt1
		];
	return $messages;
}
function im1($originalContentUrl,$previewImageUrl)
{
	$messages = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl ,
		'previewImageUrl' => $previewImageUrl
		];
	return $messages;
}
// Function Return data
function im2($replyToken,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2)
{
	$image1 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl1 ,
		'previewImageUrl' => $previewImageUrl1
		];
	$image2 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl2 ,
		'previewImageUrl' => $previewImageUrl2
		];
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$image1,$image2]
		];	
	return $data;
}
function im3($replyToken,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2,$originalContentUrl3,$previewImageUrl3)
{
	$image1 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl1 ,
		'previewImageUrl' => $previewImageUrl1
		];
	$image2 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl2 ,
		'previewImageUrl' => $previewImageUrl2
		];
	$image3 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl3 ,
		'previewImageUrl' => $previewImageUrl3
		];
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$image1,$image2,$image3]
		];	
	return $data;
}
function im4($replyToken,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2,$originalContentUrl3,$previewImageUrl3,$originalContentUrl4,$previewImageUrl4)
{
	$image1 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl1 ,
		'previewImageUrl' => $previewImageUrl1
		];
	$image2 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl2 ,
		'previewImageUrl' => $previewImageUrl2
		];
	$image3 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl3 ,
		'previewImageUrl' => $previewImageUrl3
		];
	$image4 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl4 ,
		'previewImageUrl' => $previewImageUrl4
		];
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$image1,$image2,$image3,$image4]
		];	
	return $data;
}
function im5($replyToken,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2,$originalContentUrl3,$previewImageUrl3,$originalContentUrl4,$previewImageUrl4,$originalContentUrl5,$previewImageUrl5)
{
	$image1 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl1 ,
		'previewImageUrl' => $previewImageUrl1
		];
	$image2 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl2 ,
		'previewImageUrl' => $previewImageUrl2
		];
	$image3 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl3 ,
		'previewImageUrl' => $previewImageUrl3
		];
	$image4 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl4 ,
		'previewImageUrl' => $previewImageUrl4
		];
	$image5 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl5 ,
		'previewImageUrl' => $previewImageUrl5
		];	
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$image1,$image2,$image3,$image4,$image5]
		];	
	return $data;
}
function t1im2($replyToken,$tt1,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2)
{
	$messages = [
		'type' => 'text',
		'text' => $tt1
		];
	$image1 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl1 ,
		'previewImageUrl' => $previewImageUrl1
		];
	$image2 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl2 ,
		'previewImageUrl' => $previewImageUrl2
		];
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$messages,$image1,$image2]
		];	
	return $data;
}
// Function Return data
function data1($replyToken,$messages)
{
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$messages]
		];
	return $data;
}
?>
