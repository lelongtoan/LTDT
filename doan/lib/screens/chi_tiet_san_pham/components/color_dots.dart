import 'package:doan/components/rounded_icon_btn.dart';
import 'package:doan/constants.dart';
import 'package:doan/models/Product.dart';
import 'package:flutter/material.dart';

import '../../../size_config.dart';

class ColorDots extends StatelessWidget {
  const ColorDots({
    Key? key,
    required this.product,
  }) : super(key: key);

  final Product product;

  @override
  Widget build(BuildContext context) {
    // Xu ly code chon size giay
    int selectedSize = 1;
    return Padding(
      padding:
          EdgeInsets.symmetric(horizontal: getProportionateScreenWidth(20)),
      child: Row(
        children: [
          ...List.generate(
            demoProducts.length,
            (index) => ColorDot(
              color: product.colors[index],
              isSelected: selectedSize == index,
              size: product.size[index],
            ),
          ),
          Spacer(),
          //Xu ly + - san pham
          RoundedIconBtn(
            iconData: Icons.remove,
            press: () {},
          ),
          SizedBox(width: getProportionateScreenWidth(15)),
          RoundedIconBtn(
            iconData: Icons.add,
            press: () {},
          ),
        ],
      ),
    );
  }
}

class ColorDot extends StatelessWidget {
  const ColorDot({
    Key? key,
    required this.color,
    required this.size,
    this.isSelected = false,
  }) : super(key: key);

  final Color color;
  final String size;
  final bool isSelected;

  @override
  Widget build(BuildContext context) {
    return Container(
      margin: EdgeInsets.only(right: 2),
      alignment: Alignment.center,
      height: getProportionateScreenWidth(40),
      width: getProportionateScreenWidth(40),
      decoration: BoxDecoration(
        // color: product.colors[0],
        shape: BoxShape.circle,
        border:
            Border.all(color: isSelected ? kPrimaryColor : Colors.transparent),
      ),
      child: DecoratedBox(
        decoration: BoxDecoration(
          color: color,
          shape: BoxShape.circle,
        ),
        child: Text(
          '$size',
          style: TextStyle(fontSize: 25.0),
        ),
      ),
    );
  }
}
