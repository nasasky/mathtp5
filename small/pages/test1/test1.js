// pages/test1/test1.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
   id:1
  },

  radioChange:function(e){
    //console.log(e.detail.value);
    var saveid = this.data.id;
    var ids = ++this.data.id;
    //.log(ids);
    wx.redirectTo({
      url: '../test2/test2?id='+ids
    })
   // console.log(saveid);
    wx.request({
      url: 'https://ah.nvli.club/admin/math_nums/save_answer', 
      data: {
        saveid: saveid,
        answer: e.detail.value,
      },
      success(res) {
       // console.log(res.data)
      }
    })
  },



  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var that = this;
    wx.request({
      url: 'https://ah.nvli.club/admin/math_nums/get_maths', // 仅为示例，并非真实的接口地址
      success(res) {
       // console.log(res.index)
       // console.log(res.data) 
        that.setData({
          id:res.data.mathsNum.id,
          mathsNum:res.data.mathsNum
        });
      }
    })
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {

  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {

  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {

  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {

  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {

  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {

  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {

  }
})