import 'package:flutter/material.dart';

class Product {
  final int id;
  final String title, description;
  final List<String> images;
  final List<String> size;
  final List<Color> colors;
  final double rating, price;
  final bool isFavourite, isPopular;

  Product({
    required this.id,
    required this.images,
    required this.size,
    required this.colors,
    this.rating = 0.0,
    this.isFavourite = false,
    this.isPopular = false,
    required this.title,
    required this.price,
    required this.description,
  });
}

// Our demo Products

List<Product> demoProducts = [
  Product(
    id: 1,
    images: [
      "assets/images/nikeair1.jfif",
      "assets/images/nikeair2.png",
      "assets/images/nikeair3.png",
      "assets/images/nikeair4.png",
    ],
    size: [
      "41",
      "42",
      "43",
      "44",
    ],
    colors: [
      Color(0xFF81D4FA),
      Color(0xFF81D4FA),
      Color(0xFF81D4FA),
      Color(0xFF81D4FA),
    ],
    title: "Air Jordan 1 Mid SE",
    price: 64.99,
    description: description,
    rating: 4.8,
    isFavourite: true,
    isPopular: true,
  ),
  Product(
    id: 2,
    images: [
      "assets/images/dawn1.jfif",
    ],
    size: [
      "41",
      "42",
      "43",
      "44",
    ],
    colors: [
      Color(0xFF81D4FA),
      Color(0xFF81D4FA),
      Color(0xFF81D4FA),
      Color(0xFF81D4FA),
    ],
    title: "Nike Air Max Dawn",
    price: 50.5,
    description: description,
    rating: 4.1,
    isPopular: true,
  ),
  Product(
    id: 3,
    images: [
      "assets/images/force1.jfif",
    ],
    size: [
      "41",
      "42",
      "43",
      "44",
    ],
    colors: [
      Color(0xFF81D4FA),
      Color(0xFF81D4FA),
      Color(0xFF81D4FA),
      Color(0xFF81D4FA),
    ],
    title: "Nike Air Force 1",
    price: 36.55,
    description: description,
    rating: 4.1,
    isFavourite: true,
    isPopular: true,
  ),
  Product(
    id: 4,
    images: [
      "assets/images/justin1.jfif",
    ],
    size: [
      "41",
      "42",
      "43",
      "44",
    ],
    colors: [
      Color(0xFF81D4FA),
      Color(0xFF81D4FA),
      Color(0xFF81D4FA),
      Color(0xFF81D4FA),
    ],
    title: "Nike Just In",
    price: 20.20,
    description: description,
    rating: 4.1,
    isFavourite: true,
  ),
];

const String description =
    "OWN THE FLOOR: AC BONIFACIO gives you what you want in your life from over precision control…";
