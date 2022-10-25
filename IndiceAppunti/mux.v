`timescale 1ns / 1ps


module mux #(
parameter N=32 //set bit width of the mux
    ) (
    input wire [N-1:0] d0,d1,
    input wire sel,   
    output reg [N-1:0] out
    );

always@(sel,d0,d1)
if (sel==1'b1) out=d1;
else out=d0;

endmodule
