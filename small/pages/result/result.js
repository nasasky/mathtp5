// pages/result/result.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    falseAnswer:'',
    trueAnswer:'',
    true_fen:'',
    true_rate:'',
   
  },

  /*查看错题*/
  seeMistakes: function(options){
    var falseNum = this.data.falseAnswer;
    //console.log(falseNum);
    if (falseNum == 0){
      wx.showToast({
        title: '恭喜你获得满分!',
        icon: 'success',
        duration: 2000
      })
    }else{
         wx.redirectTo({
      url: '../mistakes/mistakes?falseNum=' + falseNum
    })
    }
   
  },

  /*返回首页*/
  returnBase:function(){
    wx.redirectTo({
      url: '../base/base'
    })
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var that = this
    wx.request({
      url: 'https://ah.nvli.club/admin/math_nums/get_result',
      
      success(res) {
       // console.log(res.data)
        var result = res.data;
        that.setData({
          falseAnswer: res.data.falseAnswer,
          trueAnswer: res.data.trueAnswer,
          true_fen: res.data.true_fen,
          true_rate: res.data.true_rate,
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