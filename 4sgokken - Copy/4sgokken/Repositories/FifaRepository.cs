using REST_Voetbal.Models;
using System;
using System.Net.Http.Json;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Text.Json;
using System.Net.Http;

namespace REST_Voetbal.Repositories
{
    public class FifaRepository
    {
        HttpClient _client = new HttpClient();
        public FifaRepository(string baseUrl = "https://fifa.amo.rocks/api/", string key= "D123456")
        {
            Key = key;
            BaseUrl = baseUrl;
            _client = new HttpClient()
            {
                BaseAddress = new Uri(baseUrl),
            };
        }



        public string BaseUrl { get; set; }

        public string Key { get; set; }

        public async Task<List<MatchModel>> GetMatches()
        {
            if (string.IsNullOrWhiteSpace(Key))
            {
                throw new ArgumentException("Key is niet gezet");
            }
            var str = await _client.GetStringAsync($"matches.php?key={Key}");
            var result = await _client.GetFromJsonAsync<List<MatchModel>>($"matches.php?key={Key}");
           
            return result;
        }
    }
}
